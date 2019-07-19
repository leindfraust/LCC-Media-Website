<?php

$user = 'root';
$pass = '';

$db = 'orders';

$con = mysqli_connect('localhost', $user, $pass, $db) or die("Unable to connect");


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="scripts/vue.js"></script>
	<script src="scripts/axios-master/dist/axios.min.js"></script>
</head>
<body>
	<div id="myapp">
		<input type="button" @click='allRecords()' value="Select All users">
	</br>

	<input type="text" v-model="ID" placeholder="input user ID">
	<input type="button" @click='selectByRecords()' value="select user by ID">
	</br>

	<table border="1" width="80%" style="border-collapse: collapse;">
		<tr>
			<th>Name</th>
			<th>YearSectionORAddress</th>
			<th>MobileNumber</th>
			<th>ShirtName</th>
			<th>ShirtType</th>
			<th>ShirtSize</th>
			<th>Quantity</th>
			<th>OIG</th>
		</tr>  

		<tr v-for="orders in ID">
			<td>{{ orders.Name }}</td>
			<td>{{ orders.YearSectionORAddress }}</td>
			<td>{{ orders.MobileNumber }}</td>
			<td>{{ orders.ShirtName }}</td>
			<td>{{orders.ShirtType}}</td>
			<td>{{ orders.ShirtSize }}</td>
			<td>{{ orders.Quantity }}</td>
			<td>{{ orders.OIG }}</td>
		</tr>
	</table>
</div>
<script>
let app = new Vue({
  el: '#myapp',
  data: {
    orders: "",
    ID: 0
  },
  methods: {
    allRecords: function(){

      axios.get('ajax.php')
      .then(function (response) {
         app.orders = response.data;
      })
      .catch(function (error) {
         console.log(error);
      });
    },
    selectByRecords: function(){
      if(this.ID > 0){
 
        axios.get('ajax.php', {
           params: {
             ID: this.ID
           }
        })
        .then(function (response) {
           app.orders = response.data;
        })
        .catch(function (error) {
           console.log(error);
        });
      }
    }
  }
})
</script>
</body>
</html>