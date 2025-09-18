
var COMMAND_TYPE = {
    'save': '',
    'edit': '',
    'del':'',
    'get' : '',
    'set' : ''
};

var MENU_TYPE = {};

// leftMenuId : 메뉴를 구성하는 UL Tag 의 Id.
// currentPage : 현재 페이지의 URI (global variable)
var leftMenuControl = {
    currentPage: '',
    set: function (leftMenuId) {

        $('#' + leftMenuId).find('li').each(function (index) {
            if ($(this).find('ul').length > 0) {
                $(this).on('click', function () {
                    $(this).find('ul').slideToggle();
                });
            } else {
                $(this).on('click', function () {
                    window.location.href = '/prototype/index.html?' + index;
                });
            }
        });
    }
};

var CONTENTS_SCREEN_TYPE = {
    "none": {
        cssClassName: { "main": "ui-layout-center", "sub": "" },
        toggleTarget: '',
        toggleButtons:''
    },
    "horizontal": {
        cssClassName: { "main": "ui-layout-center", "sub": "ui-layout-south" },
        toggleTarget: 'south',
//        toggleButtons: '<div class="btnToggler"></div>' + '<div class="btnReset"></div>' + '<div class="btnExpand"></div>'
        toggleButtons: '<div class="btnExpand">□</div>' + '<div class="btnReset">○</div>'+ '<div class="btnMin">_</div>' + '<div class="btnToggler">T</div>'
    },
    "vertical": {
        cssClassName: { "main": "ui-layout-center", "sub": "ui-layout-east" },
        toggleTarget: 'east',
        //        toggleButtons: '<div class="btnToggler"></div>' + '<div class="btnReset"></div>' + '<div class="btnExpand"></div>'
        toggleButtons: '<div class="btnExpand">□</div>' + '<div class="btnReset">○</div>' + '<div class="btnMin">_</div>' + '<div class="btnToggler">T</div>'
        
    }
};

var ContentsScreenControl = function (screenType) {

    this.init = function (screenType) {

        this.screenType = screenType || this.screenType;
        this.defaultSize = '50%';
        this.set();
    };
    this.screenType_old = null;
    this.screenType = CONTENTS_SCREEN_TYPE.horizontal;
    this.defaultSize = 'auto';
    this.splitObj = null;
    
    this.set = function () {

        var _this = this;
        
        //        switch (this.screenType) {
        //            case CONTENTS_SCREEN_TYPE.none: log('1'); screenAll(this.screenType); return;
        //            case CONTENTS_SCREEN_TYPE.horizontal: log('2'); screenSplit(this.screenType); return;
        //            case CONTENTS_SCREEN_TYPE.vertical: log('3'); screenSplit(this.screenType); return;
        //            default: log(this.screenType); return;
        //        }


        var splitData = {
            resizeWhileDragging: true,
            fxName: "none",
            spacing_open: 15,
            spacing_closed: 15

        }
        splitData['south__size'] = this.defaultSize;
        splitData['south__togglerLength_closed'] = 142;
        splitData['south__togglerLength_open'] = 142;
        splitData['south__togglerContent_closed'] = CONTENTS_SCREEN_TYPE.horizontal.toggleButtons;
        splitData['south__togglerContent_open'] = CONTENTS_SCREEN_TYPE.horizontal.toggleButtons;

        splitData['east__size'] = '50%';
        splitData['east__togglerLength_closed'] = 142;
        splitData['east__togglerLength_open'] = 142;
        splitData['east__togglerContent_closed'] = CONTENTS_SCREEN_TYPE.vertical.toggleButtons;
        splitData['east__togglerContent_open'] = CONTENTS_SCREEN_TYPE.vertical.toggleButtons;

        _this.splitObj = $('#contents_split_layout').layout(splitData);

        var $eastToggler = _this.splitObj.togglers.east,
            $southToggler = _this.splitObj.togglers.south;

        $eastToggler.unbind("click");
        $southToggler.unbind("click");

        // BIND CUSTOM WEST METHODS
        $eastToggler.find(".btnToggler").click(toggleEast);
        $eastToggler.find(".btnExpand").click(expandEast);
        $eastToggler.find(".btnReset").click(resetEast);
        $eastToggler.find(".btnMin").click(minEast);

        // BIND CUSTOM SOUTH METHODS
        $southToggler.find(".btnToggler").click(toggleSouth);
        $southToggler.find(".btnExpand").click(expandSouth);
        $southToggler.find(".btnReset").click(resetSouth);
        $southToggler.find(".btnMin").click(minSouth);

        // ADD TOOLTIPS TO CUSTOM BUTTONS
        $(".btnExpand").attr("title", "Maximize");
        $(".btnReset").attr("title", "Reset size to default");
        $(".btnToggler").attr("title", "Toggle");
        $(".btnMin").attr("title", "Minimize");

        function toggleEast(evt) { _this.splitObj.toggle("east"); evt.stopPropagation(); }; //_this.splitObj.toggle("east"); evt.stopPropagation();
        function expandEast(evt) { sizePane("east", '100%'); evt.stopPropagation(); };
        function resetEast(evt) { sizePane("east", '50%'); evt.stopPropagation(); };
        function minEast(evt) { _this.splitObj.close('east'); evt.stopPropagation(); };

        // CUSTOM SOUTH METHODS
        function toggleSouth(evt) { _this.splitObj.toggle("south"); evt.stopPropagation(); };
        function expandSouth(evt) { sizePane("south", '100%'); evt.stopPropagation(); }; // ie, make as big as possible
        function resetSouth(evt) { sizePane("south", '50%'); evt.stopPropagation(); };
        function minSouth(evt) { _this.splitObj.close('south'); evt.stopPropagation(); };

        // GENERIC HELPER FUNCTION
        function sizePane(pane, size) {
            _this.splitObj.sizePane(pane, size);
            _this.splitObj.open(pane); // open pane if not already
        };

        switch (this.screenType) {
            case CONTENTS_SCREEN_TYPE.none:
                log('1');
                this.splitObj.hide('south');
                this.splitObj.hide('east');
                return;
            case CONTENTS_SCREEN_TYPE.horizontal:
                log('2');
                this.splitObj.show('south');
                this.splitObj.hide('east');
                return;
            case CONTENTS_SCREEN_TYPE.vertical:
                log('3');
                this.splitObj.hide('south');
                this.splitObj.show('east');
                return;
            default: log(this.screenType); return;
        }

        function screenAll(screenType) {

            $('#contents_sub').hide();
            $('#contents_main').attr('style', 'height:100%;');
            $('#contents_sub').removeClass();
            //delete myLayout;
            _this.close();
            //            _this.splitObj = null;
        }

        function screenSplit(screenType) {

            $('#contents_sub').removeClass();
            $('#contents_sub').addClass('divCont2 ' + screenType.cssClassName.sub);

            $('#contents_sub').show();
            //            $('#contents_sub').attr('style', 'height:50%;');
            //            $('#contents_main').attr('style', 'height:50%;');

            _this.open();
            //            _this.splitObj = null;

            var splitData = {
                resizeWhileDragging: true,
                fxName: "none",
                spacing_open: 8,
                spacing_closed: 8

            }
            splitData[screenType.toggleTarget + '__size'] = this.defaultSize;
            splitData[screenType.toggleTarget + '__togglerLength_closed'] = 105;
            splitData[screenType.toggleTarget + '__togglerLength_open'] = 105;
            splitData[screenType.toggleTarget + '__togglerContent_closed'] = this.toggleButtons;
            splitData[screenType.toggleTarget + '__togglerContent_open'] = this.toggleButtons;

            _this.splitObj = $('#contents_split_layout').layout(splitData);
        }
    };

    this.resetType = function (screenType) {

        if (typeof type === "string") {
        } else {
        }

        this.screenType_old = this.screenType && this.screenType;
        this.screenType = screenType;
        this.set();
    };

    this.init(screenType);


    //    this.close = function () {
    //        if (this.screenType_old) {
    //            this.splitObj && this.splitObj.hide(this.screenType_old.toggleTarget);
    //        }
    //    };
    //    this.open = function () {
    //        this.splitObj && this.splitObj.open(this.screenType.toggleTarget);
    //    };
};

var ContentsScreenControl2 = function (screenType) {

    this.init = function (screenType) {

        this.screenType = screenType || this.screenType;
        this.defaultSize = '50%';
        this.set();
    };
    this.screenType_old = null;
    this.screenType = CONTENTS_SCREEN_TYPE.horizontal;
    this.defaultSize = 'auto';
    this.splitObj = null;

    this.set = function () {

        var _this = this;
        var splitData = {
            resizeWhileDragging: true,
            fxName: "none",
            spacing_open: 4,
            spacing_closed: 4

        }
        splitData['south__size'] = this.defaultSize;
        splitData['east__size'] = this.defaultSize;

        _this.splitObj = $('#contents_layout_split').layout(splitData);

        


        switch (this.screenType) {
            case CONTENTS_SCREEN_TYPE.none:
                log('1');
                this.splitObj.hide('south');
                this.splitObj.hide('east');
                return;
            case CONTENTS_SCREEN_TYPE.horizontal:
                log('2');
                this.splitObj.show('south');
                this.splitObj.hide('east');
                return;
            case CONTENTS_SCREEN_TYPE.vertical:
                log('3');
                this.splitObj.hide('south');
                this.splitObj.show('east');
                return;
            default: log(this.screenType); return;
        }
    };

    this.resetType = function (screenType) {

        if (typeof type === "string") {
        } else {
        }

        this.screenType_old = this.screenType && this.screenType;
        this.screenType = screenType;
        this.set();
    };

    this.init(screenType);

};

var ContentsScreenControl3 = function (screenType) {

    this.init = function (screenType) {

        this.screenType = screenType || this.screenType;
        this.defaultSize = '50%';
        this.set();
    };
    this.screenType_old = null;
    this.screenType = CONTENTS_SCREEN_TYPE.horizontal;
    this.defaultSize = 'auto';
    this.splitObj = null;

    this.set = function () {

        var _this = this;
        var splitData = {
            resizeWhileDragging: true,
            fxName: "none",
            spacing_open: 2,
            spacing_closed: 2

        }
        splitData['south__size'] = this.defaultSize;
        splitData['east__size'] = this.defaultSize;

        _this.splitObj = $('#contents_layout_split').layout(splitData);

        
		this.splitObj.show('south');
        this.splitObj.show('east');

    };

    this.resetType = function (screenType) {

        if (typeof type === "string") {
        } else {
        }

        this.screenType_old = this.screenType && this.screenType;
        this.screenType = screenType;
        this.set();
    };

    this.init(screenType);

};

var pagingControl = function () {
    this.init = function () { };
    this.set = function () { };
    this.move = function () { };
};