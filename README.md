## JSNOW VLOOKUP
This library will make you find data easily, using search and pagination feature, you can easily find your data!

## OPTIONS
<ul>
  <li>(string) <code>title</code> -> The title of your popup</li>
  <li>(boolean) <code>search</code> -> Set true if you want to add search feature (default true)</li>
  <li>(int) <code>limit</code> -> Limit data in table (default 10)</li>
  <li>(string) <code>key</code> -> Value that will be a callback, referenced to your data</li>
  <li>(array) <code>data</code> -> Data that you want to append in table</li>
</ul>

## HOW TO USE

```javascript
$("#yourElementId).jsnowlookup(options)
```

```javascript
{
  title: 'Find users',
  search: true,
  limit: 5,
  data: [
    {
      name: 'person-1',
      age: 'dummy-age',
      phone: 'dummy-phone',
      email: 'dummy-email',
      address: 'dummy-address',
    }, {
      name: 'person-1',
      age: 'dummy-age',
      phone: 'dummy-phone',
      email: 'dummy-email',
      address: 'dummy-address',
    }, ... etc
  ]
}
```

## SERVERSIDE
Add this line to the options
```javascript
{
  ....

  serverside: {
    enabled: true, // MUST BE TRUE!
    url: 'https://domain.com', // YOUR API URL
    columns: [
      {
        title: 'Username', // TO BE YOUR TITLE IN TABLE HEADER
        column: 'username' // FIELD IN YOUR DATABASE
      }, {
        title: 'Full Name', // TO BE YOUR TITLE IN TABLE HEADER
        column: 'full_name' // FIELD IN YOUR DATABASE
      }, ... etc
    ]
  }
}
```

The <code>.jsnowlookup()</code> will send to your API with this properties:<br />
```javascript
{
  columns: 'columns that you defined in options',
  limit: 'limit that you defined in options',
  offset: 'offset of page to your query',
  searchValue: 'string that you type in search bar'
}
```

## SERVERSIDE API EXAMPLE
You can simply use api example using <code>php</code> in folder <code>/api</code>, but first you need to <code>IMPORT!</code> the <code>.sql</code> file!, <br />
Create folder in your web server with name <code>/jsnow-vlookup</code> and put the <code>api.php</code> inside the folder, and all will be fine!

## VERSION
1.1.3