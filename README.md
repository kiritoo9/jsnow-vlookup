# JSNOW VLOOKUP
<p>
  This library will make you find data easily, using search and pagination feature, you can easily find your data!
</p>

# OPTIONS
<ul>
  <li>title (string) // The title of your popup</li>
  <li>search (boolean) // Set true if you want to add search feature (default true)</li>
  <li>limit (int) // Limit data in table</li>
  <li>key (string) // Value that will be a callback</li>
  <li>data (array) // Data that you want to append in table</li>
</ul>

# HOW TO USE
> $("#yourId).jsnowlookup({
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

# VERSION
> 1.0.1