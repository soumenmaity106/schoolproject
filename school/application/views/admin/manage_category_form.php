<style>
    table thead th {
        text-align:center;  
        //max-width: 
        //font-weight:normal 
        //font-family:serif, sans-serif, monospace, cursive, fantasy, 
        //font-weight:bold;
        //font-size:17px; 
        //text-shadow: 1px 1px 1px #000; 
        

    }

    .dataTables tbody tr td {
        /*min-height: 1px;
        height:2px;
        margin:0;
        padding:0;*/ 
        /*min-height: 35px; or whatever height you need to make them all consistent */
    }

    #cat-table tbody tr td {
        /*min-height: 1px;
        height:2px;
        margin:0;
        padding:0;*/
        margin-top:200px; 

    }
    #cat-table{
        margin-top:200px; 
    }
    /*#th2{
        margin-top:200px; 
        padding-top:200px; 
    } */   
    hr{height:10px;
       color:black;
       background:black; 
       width:100%;
    }
</style>















<script type="text/javascript">
    $(document).ready(function () {
        $('#cat-table').DataTable(
                {
                  "bResetDisplay": false,                    
                    "pageLength":2,
                    "lengthMenu": [
                        [2, 5, 10, 15, 25, 50, -1],
                        [2, 5, 10, 15, 25, 50, "All"]
                    ],
                     /*"iDisplayLength":5,*/
                     /*"ajax": "data.json",*/
                     "sPaginationType": "full_numbers",
                     "bStateSave": true,     
                     "drawCallback": function( settings ) {
      /*alert ( 'You are on ssame page' );*/
}
                });

        //$('#cat-table').DataTable.draw('full-hold');
        //$('#cat-table').DataTable.draw(false);
        //$('#myTable').DataTable.draw('full-hold');
        //oTable.fnDraw();
        
        
        
        /*[code]
        function Button2_onclick() {
        var iCurrentPage = oTable.fnSettings()._iDisplayStart;
        var oSettings = oTable.fnSettings();
        oSettings._iDisplayStart = iCurrentPage;
        oTable.fnDraw(oSettings);
        }
        [/code]*/        


        /*
         WRONG SHOULD BE CSS NOT ATTR
         $('#cat-table tr td').attr('padding','0');
         $('#cat-table tr td').attr('margin','0');
         $('#cat-table tr td').attr('min-height','3px');              
         $('#cat-table tr td').attr('height','4px');   
         */

/*$('#td1').css('width','104px');
$('#td2').css('width','104px');
$('#td3').css('width','104px');
$('#td4').css('width','104px');
$('#td5').css('width','104px');*/

        //$('#cat-table tr td')  .css('padding-top','0');
        //$('#cat-table tr td')  .css('padding-bottom','0');
        //$('#cat-table tr td')  .css('margin','0');
        //$('#cat-table tr td')  .css('min-height','8px');              
        //$('#cat-table tr td')  .css('height','8px');   
        //$('#cat-table tr td p').css('height','8px');         // THE VALUD INSIDE TR->TD HAS TO BE SAME AS THE HEIGHT   
        $('#cat-table tr td p').css('font-size', '13px');      // THE FONT SIZE INSIDE THE CELL
        $('#cat-table tr td').css('font-size', '12px');        // THE FONT SIZE INSIDE THE CELL
        $('#cat-table tr td').css('font-family','cursive');    // THE FONT SIZE INSIDE THE CELL
        $('#cat-table tr td p').css('font-family','cursive');  // THE FONT SIZE INSIDE THE CELL
        //
        //
        /*$('#cat-table tr td').hover(function () {
            $(this).css('font-size', '17px');
            $(this).css('font-weight', 'bold');
            //$(this).css('background', '#272727');
            //$(this).css('color', '#FFFFFF');
        }, function () {
            $(this).css('font-size', '12px');
            $(this).css('font-weight', 'normal');
            //$(this).css('background', '#FFFFFF');
            //$(this).css('color', '#000000');
        });*/
////////////////////////////////////////////////////////////////////////////////
        /*$('#cat-table tr td p').hover(function () {
            $(this).css('font-size', '17px');
            $(this).css('font-weight', 'bold');
            //$(this).css('background', '#272727');
            //$(this).css('color', '#FFFFFF');
        }, function () {
            $(this).css('font-size', '13px');
            $(this).css('font-weight', 'normal');
            //$(this).css('background', '#FFFFFF');
            //$(this).css('color', '#000000');
        });*/

        /*  $('#cat-table tr td').hover(function(){
         $(this).css('height','25px');
         //$(this).css('font-weight','bold');    
         }, function(){
         $(this).css('height','8px');
         //$(this).css('font-weight','normal');  
         });*/




    });





</script>






    




<hr>
<table id="cat-table" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
    <center>
        <th width="12%">Category ID</th>
        <th width="18%">Category Name</th>
        <th width="50%">Category Description</th>
        <th width="10%">Publication Status</th>
        <th width="10%">Options</th>
    </center>            
</tr>
</thead>

<tbody>
    <?php
    foreach ($all_category as $v_all_category) {
        ?>        
        <tr>
            <!--<div style="height:15px; min-height:15px; overflow :auto;">-->
    <div>             
        <td id="td1"><?php echo $v_all_category->category_id; ?></td>
        <td id="td2"><?php echo $v_all_category->category_name; ?></td>
        
       <!-- <a id="popover" data-trigger="hover"> -->
        <td id="td3"><?php echo substr($v_all_category->category_description, 0, 50);?></td>
       <!-- </a> -->
        
<!--        
<a id="popover" data-trigger="hover">Popover</a>        
-->        
        
        <td id="td4">
            <?php
            if ($v_all_category->publication_status == 1) {
                echo "Published";
            } else {
                echo "Un-published";
            }
            ?>    
        </td>
        <td id="td5">
            <?php
            if ($v_all_category->publication_status == 1) {
                ?>    
                <a class="btn btn-xs btn-success" href="<?php echo base_url(); ?>super_Admin/unpublished_category/<?php echo $v_all_category->category_id; ?>" title="Published">
                    <span class="glyphicon glyphicon-arrow-up">
                    </span>
                </a>
                <?php
            } else {
                ?>    
                <a class="btn btn-xs btn-danger" href="<?php echo base_url(); ?>super_Admin/published_category/<?php echo $v_all_category->category_id; ?>" title="Published">
                    <span class="glyphicon glyphicon-arrow-down">
                    </span>
                </a>
                <?php
            }
            ?>
            <a class="btn btn-xs btn-default" href="<?php echo base_url(); ?>super_Admin/edit_category/<?php echo $v_all_category->category_id; ?>" title="Edit">
                <span class="glyphicon glyphicon-pencil">
                </span>
            </a>
            <a class="btn btn-xs btn-default"  href="<?php echo base_url(); ?>super_Admin/delete_category/<?php echo $v_all_category->category_id; ?>" title="Delete" onclick="return checkDelete();">
                <span class="glyphicon glyphicon-remove">
                </span>
            </a>
        </td>
    </div>                      
    </tr>
    <?php
}
?>        
</tbody>

</table>

















