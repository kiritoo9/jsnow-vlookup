# JSNOW VLOOKUP
<p>
  This library will make you find data easily, using search and pagination feature, you can easily find your data!
</p>

# OPTIONS
<ul>
  <li>title (string) // The title of your popup</li>
  <li>search (boolean) // Set true if you want to add search feature (default true)</li>
  <li>limit (int) // Limit data in table (default 10)</li>
  <li>key (string) // Value that will be a callback, referenced to your data</li>
  <li>data (array) // Data that you want to append in table</li>
</ul>

# HOW TO USE
<pre>
  $("#yourId).jsnowlookup({
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
  });
</pre>

# SERVERSIDE
<p>
  Add this line to the options
<p>
<pre>
  $("#yourid).jsnowlookup({
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
  });
<pre>
<p>
  The <code>.jsnowlookup()</code> will send to your API with this properties:<br />
  <pre>
    {
      columns: 'columns that you defined in options',
      limit: 'limit that you defined in options',
      offset: 'offset of page to your query',
      searchValue: 'string that you type in search bar'
    }
  </pre>
</p>

# VERSION
> 1.1.1