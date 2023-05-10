<form method = "POST" action = "upload-test.php" enctype = "multipart/form-data"> 
<div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label> <strong> Provide only one (1) Property Document </strong> </label> 
                      
                                <div class = "form-group form-check">
                                    <input type="radio" name = "document" class="form-check-input" id="validationCustom09">
                                    <label for = "validationCustom09"> Business Permit </label>
                                </div>

                                <div class = "form-group form-check">
                                    <input type="radio" name = "document" class="form-check-input" id="validationCustom09">
                                    <label for = "validationCustom09"> DTI </label>
                                </div>

                                <div class = "form-group form-check">
                                    <input type="radio" name = "document" class="form-check-input" id="validationCustom09">
                                    <label for = "validationCustom09"> 0605 BIR Form </label>
                                </div>
                                
                                <label> Upload Document Here:</label>
                                <input type = "file" name = "document-image"/>
                            </div>
                        </div>
                        <button type = "submit" name = "submit"> Upload </button>
</form>