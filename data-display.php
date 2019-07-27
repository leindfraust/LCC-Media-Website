<?php session_start();
 if(!isset($_SESSION['admin'])){
        header("Location:admin.php");
     }
          echo "Login Success";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Data Display</title>
    <link rel="shortcut icon" type="image/png" href="css/img/lcclogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bulma-0.7.1/css/bulma.css">
    <link rel="stylesheet" href="css/bulma-0.7.1/css/bulma.css.map">
    <script src="scripts/vue.js"></script>
    <script src="scripts/axios-master/dist/axios.min.js"></script>
    <style>
        #myapp {
            padding: 50px;
        }

        @media screen and (max-width: 1000px) {
            #myapp {
                padding: 0 !important;
            }

            .input {
                width: 45% !important;
            }
        }

    </style>
</head>

<body>
    <div id="myapp">
        <button type="button" class="button is-primary" @click='allRecords()'>Fetch all records</button>
        <button type="button" class="button is-info" @click='byPending()'>Fetch all records that are "pending"</button>
        <button type="button" class="button is-success" @click='byReady()'>Fetch all records that are "ready for pick-up/delivery"</button>
        <div><br>
            <input type="text" class="input" style="width:  10%" v-model="ID" name="ID" placeholder="input user ID">
            <button type="button" class="button" @click='selectByRecords()'>Search records... </button>
        </div>
        <center> <br>
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>YearSection/Address</th>
                    <th>Mobile Number</th>
                    <th>Shirt Name</th>
                    <th>Shirt Type</th>
                    <th>Shirt Size</th>
                    <th>Quantity</th>
                    <th>OIG</th>
                    <th>Status</th>
                </tr>

                <tr v-for="order in orders">
                    <td>{{order.ID}}</td>
                    <td>{{ order.Name }}</td>
                    <td>{{ order.YearSectionORAddress }}</td>
                    <td>{{ order.MobileNumber }}</td>
                    <td>{{ order.ShirtName }}</td>
                    <td>{{order.ShirtType}}</td>
                    <td>{{ order.ShirtSize }}</td>
                    <td>{{ order.Quantity }}</td>
                    <td>{{ order.OIG }}</td>
                    <td>{{ order.Status }}</td>
                </tr>
            </table>
        </center>
        <br><br>
        <form action="scripts/successStatusSQL.php">
            <input type="text" class="input" name="IDNo" style="width: 10%" placeholder="input ID">
            <button type="submit" value="submit" name="ready" class="button is-success">Update status to "ready for pick-up/delivery"</button>
        </form><br>
        <form action="scripts/pendingStatusSQL.php">
            <input type="text" class="input" name="IDNo" style="width: 10%" placeholder="input ID">
            <button type="submit" value="submit" name="ready" class="button is-link">Update status to "pending"</button>
        </form><br>
        <form action="scripts/deleteColSQL.php">
            <input type="text" class="input" name="IDNo" style="width: 10%" placeholder="input ID">
            <button type="submit" value="submit" name="ready" class="button is-danger">Delete record</button>
        </form><br>
        <button class="button is-warning"><a href="scripts/logout.php">Log Out</a></button>
    </div>
    <script>
        let app = new Vue({
            el: '#myapp',
            data: {
                orders: "",
                ID: ""
            },
            methods: {
                allRecords: function() {

                    axios.get('scripts/ajax.php')
                        .then(function(response) {
                            app.orders = response.data;
                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                },
                selectByRecords: function() {
                    if (this.ID > 0) {

                        axios.get('scripts/ajax.php', {
                                params: {
                                    ID: this.ID
                                }
                            })
                            .then(function(response) {
                                app.orders = response.data;
                            })
                            .catch(function(error) {
                                console.log(error);
                            });
                    }
                },
                byPending: function() {
                    axios.get('scripts/getPendingSQL.php')
                    .then(function(response){
                        app.orders = response.data;
                    })
                    .catch(function(error){
                        console.log(error);
                    })
            },
                byReady: function() {
                    axios.get('scripts/getReadySQL.php')
                    .then(function(response){
                        app.orders = response.data;
                    })
                    .catch(function(error){
                        console.log(error);
                    })
            }
            }
        })

    </script>
</body>

</html>
