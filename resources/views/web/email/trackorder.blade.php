<!DOCTYPE html>
<html>
<head>
      <title></title>
      <style type="text/css">
            #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
      </style>
</head>
<body>
<table id="customers">
      <th>Name</th>
       <th>Email</th>
       <th>Phone</th>
       <th>Order Name</th>
      <th>Order Id</th>
      
      <th>Message</th>
       <tr>
<td> {{ $data['name'] }}</td>
<td> {{ $data['email'] }}</td>
<td> {{ $data['phone'] }}</td>
<td> {{ $data['ordername'] }}</td>
<td> {{ $data['orderid'] }}</td>

<td> {{ $data['message'] }}</td>
       </tr>
</table>
</body>
</html>
