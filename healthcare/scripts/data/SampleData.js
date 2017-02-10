
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

var BOARD_PAGING_DATA = {
    'totalCount': 42, 
    'currentIndex': 1,
    'rowScale' : 20, 
    'pageScale' : 10
};

var BOARD_FILTER_DATA = {
    'Model': ['Galaxy Tap', 'Galaxy Tap 7.0', 'Galaxy Tap 10.0'],
    'Version':['Honeycomb 3.0', 'icecream'],
    'Activation':['Active', 'Inactive']
};

var BOARD_LIST_DATA = {

    '1': { 'model': 'Galaxy Tap', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true },
    '2': { 'model': 'Galaxy Tap', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true },
    '3': { 'model': 'Galaxy Tap', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true },
    '4': { 'model': 'Galaxy Tap', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true },
    '5': { 'model': 'Galaxy Tap', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true },
    '6': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '7': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '8': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '9': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '10': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '11': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '12': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '13': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '14': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '15': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '16': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '17': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '18': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '19': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '20': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '21': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '22': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '23': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '24': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '25': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '26': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '27': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '28': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '29': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '30': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '31': {'model': 'Galaxy Tap 7.0', 'version': 'Honeycomb 3.0', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '32': { 'model': 'Galaxy Tap 10.0', 'version': 'icecream', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true },
    '33': { 'model': 'Galaxy Tap 10.0', 'version': 'icecream', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true },
    '34': { 'model': 'Galaxy Tap 10.0', 'version': 'icecream', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true },
    '35': { 'model': 'Galaxy Tap 10.0', 'version': 'icecream', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true },
    '36': { 'model': 'Galaxy Tap 10.0', 'version': 'icecream', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true },
    '37': { 'model': 'Galaxy Tap 10.0', 'version': 'icecream', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true },
    '38': { 'model': 'Galaxy Tap 10.0', 'version': 'icecream', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true },
    '39': { 'model': 'Galaxy Tap 10.0', 'version': 'icecream', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true },
    '40': { 'model': 'Galaxy Tap 10.0', 'version': 'icecream', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true },
    '41': {'model': 'Galaxy Tap 10.0', 'version': 'icecream', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true},
    '42': { 'model': 'Galaxy Tap 10.0', 'version': 'icecream', 'mac': 'AB-00-01-11-00', 'serialNumber': '0a123aa123', 'productNumber': 'aaa-123-ssdfsdf', 'activation': true, 'state': true }
}