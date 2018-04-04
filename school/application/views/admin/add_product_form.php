<div class="box-content">
    <form class="form-horizontal" action="<?php echo base_url();?>super_admin/save_product" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>ADD PRODUCT</legend>
                    <h3 style="color:green;">
                            <?php 
                            $msg= $this->session->userdata('message');
                            if($msg){
                                echo $msg;
                                $this->session->unset_userdata('message');
                            }
                            ?>
                    </h3>
            <div class="control-group">
                <label class="control-label" for="typeahead">Product Name</label>
                <div class="controls">
                    <input type="text" name="product_name" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="textarea2">Category Name</label>
                <div class="controls">
                    <select name="product_category_id">
                        <option>Select Category Name</option>
                        <?php
                        foreach($all_published_category as $v_category)
                        {
                        ?>
                        <option value="<?php echo $v_category->product_category_id;?>"><?php echo $v_category->product_category_name;?></option>
                        <?php }?>
                    </select>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="textarea2">Manufacturer Name</label>
                <div class="controls">
                    <select name="manufacturer_id">
                        <option>Select Manufacturer Name</option>
                        <?php
                        foreach($all_published_manufacturer as $v_manufacturer)
                        {
                        ?>
                        <option value="<?php echo $v_manufacturer->manufacturer_id;?>"><?php echo $v_manufacturer->manufacturer_name;?></option>
                        <?php }?>
                    </select>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="typeahead">Product Price</label>
                <div class="controls">
                    <input type="text" name="product_price" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="typeahead">Product Quantity</label>
                <div class="controls">
                    <input type="text" name="product_quantity" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
                </div>
            </div>
            

            <div class="control-group">
                <label class="control-label" for="textarea2">Product Short Description</label>
                <div class="controls">
                    <textarea class="cleditor" name="product_short_description"  id="textarea2" rows="3"></textarea>
                </div>
            </div>
            

            <div class="control-group">
                <label class="control-label" for="textarea2">Product Long Description</label>
                <div class="controls">
                    <textarea class="cleditor" name="product_long_description"  id="textarea2" rows="3"></textarea>
                </div>
            </div>
            

            <div class="control-group">
                <label class="control-label" for="textarea2">Publication Status</label>
                <div class="controls">
                    <select name="publication_status">
                        <option          >Select Status</option>
                        <option value="1">Published    </option>
                        <option value="0">Unpublished  </option>
                    </select>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="fileInput">Image Upload</label>
                <div class="controls">
                    <input type="file" class="input-file uniform_on" name="product_image" id="product_image">
                </div>
            </div>          


            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save Product</button>
                <button type="reset" class="btn">Cancel</button>
            </div>
        </fieldset>
    </form>   

</div>
