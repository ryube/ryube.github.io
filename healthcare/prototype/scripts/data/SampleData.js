
var MENU_DATA = {
    'left': [
        { 'name': 'Device Management', 'link': '', 'target': '', 'isChild': false, 'children': [] },
        { 'name': 'Care Plan', 'link': '', 'target': '', 'isChild': false, 'children': [] },
        { 'name': 'Admin Account', 'link': '', 'target': '', 'isChild': false, 'children': [] },
        { 'name': 'Contents Delivery', 'link': '', 'target': '', 'isChild': true, 'children': [
            { 'name': 'Contents Management', 'link': '', 'target': '' },
            { 'name': 'Delivery Status', 'link': '', 'target': '' }
        ] },
        { 'name': 'Applicatin', 'link': '', 'target': '', 'isChild': false, 'children': [] },
        { 'name': 'Notice', 'link': '', 'target': '', 'isChild': false, 'children': [] },
        { 'name': 'Settings', 'link': '', 'target': '', 'isChild': true, 'children': [
            { 'name': 'General Settings', 'link': '', 'target': '' },
            { 'name': 'Nurse Call', 'link': '', 'target': '' }
        ] }
    ]
};

var BOARD_LIST_DATA = {

    '1': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '2': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '3': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '4': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '5': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '6': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '7': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '8': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '9': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '10': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '11': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '12': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '13': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '14': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '15': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '16': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '17': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '18': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '19': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '20': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '21': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '22': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '23': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '24': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '25': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '26': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '27': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '28': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '29': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '30': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '31': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '32': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '33': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '34': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '35': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '36': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '37': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '38': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '39': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '40': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '41': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''},
    '42': {'model' : '', 'version': '', 'mac':'', 'serialNumber':'', 'productNumber':'', 'activation':'', 'state':''}
}