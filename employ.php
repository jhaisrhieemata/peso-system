<!DOCTYPE html>
<html>
<head>
    <title>Employment Status</title>
    <style>
        /* Style to create 2 or 8 columns */
        .radio-columns {
            column-count: 2;
        }
    </style>
</head>
<body>
    <form method="post">
        <label>
            <input type="radio" name="employment_status" value="employed" onclick="showEmployedOptions()"> Employed
        </label>
        <label>
            <input type="radio" name="employment_status" value="unemployed" onclick="showUnemployedOptions()"> Unemployed
        </label>
        
        <div id="employed-options" style="display: none;">
            <div class="radio-columns">
                <label>
                    <input type="radio" name="employed_column" value="column1" onclick="showInputField()"> Column 1
                </label>
                <label>
                    <input type="radio" name="employed_column" value="column2" onclick="show8Columns()"> Column 2
                </label>
            </div>
            <div id="input-field" style="display: none;">
                <label>Input Field: <input type="text" name="employed_input"></label>
            </div>
        </div>
        
        <div id="unemployed-options" style="display: none;">
            <div class="radio-columns">
                <label>
                    <input type="radio" name="unemployed_column" value="column1" onclick="showInputField()"> Column 1
                </label>
                <label>
                    <input type="radio" name="unemployed_column" value="column2" onclick="show8Columns()"> Column 2
                </label>
            </div>
            <div id="input-field" style="display: none;">
                <label>Input Field: <input type="text" name="unemployed_input"></label>
            </div>
        </div>
    </form>

    <script>
        function showEmployedOptions() {
            document.getElementById('employed-options').style.display = 'block';
            document.getElementById('unemployed-options').style.display = 'none';
        }

        function showUnemployedOptions() {
            document.getElementById('unemployed-options').style.display = 'block';
            document.getElementById('employed-options').style.display = 'none';
        }

        function showInputField() {
            document.getElementById('input-field').style.display = 'block';
        }

        function show8Columns() {
            document.getElementById('input-field').style.display = 'none';
        }
    </script>
</body>
</html>



                                                                          <!-- <div class="form-group col-md-6">
                                                                           <label for="inputPassword4" class="col-form-label">Referred To</label>
                                                                         <select id="inputState_1" required="required" name="job_referred" class="form-control">
                                                        
                                                                               <option>NA</option>
                                                                             <option>SPES</option>
                                                                             <option>GIP</option>
                                                                              <option>TUPAD</option>
                                                                                 <option>JobStart</option>
                                                                                    <option>DILEEP</option>
                                                                                   <option>TESDA Training</option>
                                                                                    <option>Others</option>
                                                                                        </select> -->

<!-- 
                                                                <div class="form-group col-md-6">
                                                                 <label for="inputPassword4" class="col-form-label">Referred To</label>
                                                                  <select id="selector_1" required="required" name="referred_to" class="form-control">
                                                                               <option selected="selected" value>Referred To</option>
                                                                               <option>NA</option>
                                                                               <option>SPES</option>
                                                                               <option>GIP</option>
                                                                               <option>TUPAD</option>
                                                                               <option>JobStart</option>
                                                                               <option>DILEEP</option>
                                                                               <option>TESDA Training</option>
                                                                               <option>Others</option>
                                                                       </select>
                                                                             <input placeholder="Specify here" type="text" id="others_text" class="form-control" value="" hidden/>
                                                                             <script src="../../assets/js/vendor/jquery-2.2.4.min.js"></script>
                                                                           <script>
                                                                                     $('#selector_1').on('change',function(){
                                                                                       if($(this).val()==='Others'){
                                                                                           $('#others_text').removeAttr('hidden')
                                                                                          }else{
                                                                                          $('#others_text').attr('hidden',true)
                                                                                          }
                                                                                     })
                                                                              </script>    -->