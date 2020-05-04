---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Prueba


Controllador de prueba
<!-- START_d0737fa8cfaf9ee16dc9becbb3085fd9 -->
## * Create a user

[Insert optional longer description of the API endpoint here.]

> Example request:

```bash
curl -X POST "http://localhost/api/prueba" \
    -H "Content-Type: application/json" \
    -d '{"user_id":9,"room_id":"et","forever":false,"another_one":3990610.13639,"yet_another_param":{"name":"amet"},"even_more_param":[160895437.203],"book":{"name":"ipsam","author_id":13,"pages_count":12},"ids":[18],"users":[{"first_name":"John","last_name":"Doe"}]}'

```

```javascript
const url = new URL("http://localhost/api/prueba");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 9,
    "room_id": "et",
    "forever": false,
    "another_one": 3990610.13639,
    "yet_another_param": {
        "name": "amet"
    },
    "even_more_param": [
        160895437.203
    ],
    "book": {
        "name": "ipsam",
        "author_id": 13,
        "pages_count": 12
    },
    "ids": [
        18
    ],
    "users": [
        {
            "first_name": "John",
            "last_name": "Doe"
        }
    ]
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 4,
    "name": "Jessica Jones",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`POST api/prueba`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    user_id | integer |  required  | The id of the user.
    room_id | string |  optional  | The id of the room.
    forever | boolean |  optional  | Whether to ban the user forever.
    another_one | number |  optional  | Just need something here.
    yet_another_param | object |  required  | Some object params.
    yet_another_param.name | string |  required  | Subkey in the object param.
    even_more_param | array |  optional  | Some array params.
    even_more_param.* | float |  optional  | Subkey in the array param.
    book.name | string |  optional  | 
    book.author_id | integer |  optional  | 
    book[pages_count] | integer |  optional  | 
    ids.* | integer |  optional  | 
    users.*.first_name | string |  optional  | The first name of the user.
    users.*.last_name | string |  optional  | The last name of the user.

<!-- END_d0737fa8cfaf9ee16dc9becbb3085fd9 -->


