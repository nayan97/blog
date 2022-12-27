(function($){
    $(document).ready(function(){

        // delete btn alert 
        $('.delete-form').submit(function(e){
            

            let conf = confirm('Are you sure ?');

            if(conf) {
                return true;
            } else {
                e.preventDefault();
            }


        });


        // our data tables
        $('.data-table-haq').DataTable();


        // Slider Photo customyzation


      


    });
})(jQuery)