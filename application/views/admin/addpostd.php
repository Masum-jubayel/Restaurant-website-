<?php include "inc/headers.php" ?>
<?php include "inc/sidbar.php" ?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add Drink</h2>
                <div class="block">               
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name="title" placeholder="Enter Post Title..." class="medium" />
                            </td>
                        </tr>
                     
                        
                        <tr>
                            <td>
                                <label>Taka</label>
                            </td>
                            <td>
                                <input type="text" name="taka" placeholder="Enter Amount..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="body"></textarea>
                            </td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>>
            </div>
        </div>


<!-- /TinyMCE -->
<style type="text/css">
    #tinymce{font-size:15px !important;}
</style>
<!--Fancy Button-->
<link href="<?php echo base_url(); ?>resource/admin_resource/css/fancy-button/fancy-button.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>resource/admin_resource/js/fancy-button/fancy-button.js" type="text/javascript"></script>
<!--Fancy Button-->
<!-- Load TinyMCE -->
<script src="<?php echo base_url(); ?>resource/admin_resource/js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
<?php include "inc/footer.php" ?>