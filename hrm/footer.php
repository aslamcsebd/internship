   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/modernizr.js"></script>

   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="assets/datatables/js/jquery.dataTables.min.js"></script>
   <script src="assets/datatables-plugins/dataTables.bootstrap.min.js"></script>
   <script src="assets/datatables-responsive/dataTables.responsive.js"></script>
   <script src="assets/js/light-bootstrap-dashboard.js"></script>

   <script>
      //paste this code under head tag or in a seperate js file.
      // Wait for window load
      $(window).load(function () {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");
      });
   </script>

   <script>
       $('.confirmation').on('click', function () {
           return confirm('Are you sure?');
       });
   </script>

   <script>
         $(document).ready(function() {
            $('#dataTables-example').DataTable({
               responsive: true
            });
         });
   </script>

   <script type="text/javascript">
       $(document).ready(function () {

           demo.initChartist();

           $.notify({
               icon: 'pe-7s-gift',
               message: "Welcome to  Admin Panel."

           }, {
               type: 'info',
               timer: 4000
           });
       });
   </script>

   
 </body>   
</html>