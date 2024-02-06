<!-- ============================================================== -->
<!----------------- Modals เพิ่มประเภทร้านค้าและบริการ ------------------>
<!-- ============================================================== -->  
<?php
$attributes = array("new_id" => "update_news_category", "enctype"=>"multipart/form-data");
echo form_open(base_url('news/update_news_category'), $attributes);
?>

<div id="myModalEditNewsCategory" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
<div class="modal-dialog modal-xs">
      <div class="modal-content">
          <div class="modal-header bg-header-modals">
              <h4 class="modal-title text-light" id="myModalLabel2">แก้ไขหมวดหมู่บทความ</h4>
              <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
        <?php 
            foreach($news_category as $row){
                $id = $row->id;
                $category_name = $row->category_name;
            }
        ?>
          <!-- from modal  -->
          <div class="modal-body">
                  <div class="row p-l-20 p-r-10">
                    <!--  <div class="col-md-12 col-lg-12 pl-0">
                          <h5 class="text-themecolor text-lab">เพิ่มประเภทร้านค้า</h5>
                      </div> 
                    -->
                      <div class="col-md-12 col-lg-12 p-t-10 p-b-10 pl-0">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 pr-0">
                                    <label>ชื่อหมวดหมู่บทความ : <a class="text-danger">*</a></label>
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <input name="category_name" type="text" class="form-control" value="<?php echo $category_name; ?>" required>
                                </div>
                            </div>
                      </div>
                    
                  </div>
             
          </div>
          <!-- close from modal  -->

          <div class="modal-footer d-flex justify-content-center">
              <div class="row w-100">
                  <div class="col-sm-12 col-md-2 button-group text-center btn-footer">
                       <!-- contant -->
                  </div>

                  <div class="col-sm-12 col-md-4 button-group text-center btn-footer">
                      <button type="button" class="btn btn-default waves-effect btn-block" data-dismiss="modal">ยกเลิก</button>
                  </div>
                   <div class="col-sm-12 col-md-4 button-group text-center btn-footer ">
                       <button type="submit" class="btn btn-info waves-effect btn-block">แก้ไขหมวดหมู่บทความ</button>
                  </div>                 
              </div>
          </div>

      </div>
      <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
  </div>
  </form>
