    <script>
        function numofdays(){
            var checkin = document.getElementById("checkin").value;
            var checkout = document.getElementById("checkout").value;

            var date1 = new Date(checkin);
            var date2 = new Date(checkout);

            var days = date2.getTime() - date1.getTime();
            var result = days / (1000 * 60 * 60 * 24);

            return document.getElementById("result").value = result;
        }
    </script>
