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
      <th>Contact</th>
      <th>Stock</th>
      <th>Box Style</th>
      
      <th>Color</th>
      <th>Type</th>
      
      <th>Length</th>
      <th>Width</th>
      <th>Height</th>
      
      <th>Unit</th>
       
      <th>QTY1</th>
      <th>QTY2</th>
      <th>QTY3</th>
      <th>QTY4</th>
      
      <th>Message</th>
      
      
       <tr>
<td> {{ $data['p_name'] }}</td>
<td> {{ $data['email'] }}</td>
<td> {{ $data['p_phone'] }}</td>
<td> {{ $data['p_stock'] }}</td>

<td> {{ $data['p_boxname'] }}</td>
<td> {{ $data['p_color'] }}</td>
<td> {{ $data['p_type'] }}</td>

<td> {{ $data['p_length'] }}</td>
<td> {{ $data['p_width'] }}</td>
<td> {{ $data['p_height'] }}</td>

<td> {{ $data['p_unit'] }}</td>

<td> {{ $data['p_qty1'] }}</td>
<td> {{ $data['p_qty2'] }}</td>
<td> {{ $data['p_qty3'] }}</td>
@if(!empty('p_qty4') && !empty('message'))
<td> {{ $data['p_qty4'] }}</td>

<td> {{ $data['message'] }}</td>
@endif

       </tr>
</table>
</body>
</html>