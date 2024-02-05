<!-- Add -->
<div class="modal fade" id="validModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Validating the Block...... please wait</b></h4>
            </div>
            <div class="modal-body">
                 <?php echo file_get_contents("http://127.0.0.1:5000/valid"); ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
             
              </form>
            </div>
        </div>
    </div>
</div>

     