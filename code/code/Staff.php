<?php
include_once 'headerM.php'
?>
<link rel="stylesheet" href="Staff.css">

<hr>
              <p class="ab">Employee identification</p>
              <form class="l" >
                <lable > Staff name </lable>
                <input type ="text" id="sname">
                  
                <lable > Staff phone number</lable>
                <input  type ="text" id="snumber">
                  
                <lable >Hourly salary</lable>
                <input  type ="text" id="salary">
                  
              </form >
               
                  <form class="date">
                    <b>
                    <lable > Starting date </lable>
                    <input  type="date" id="sdate">
                      
                    <lable> End date </lable>
                    <input  type="date" id="edate">
                      </b>
                   </form>
                    
                   
                      <form>
                      <p class="time">Time stylesheet</p>
                      <table class="tb">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><b>First week</b></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                          </tr>
                          <tr>
                            <td><b>Second week</b></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                          </tr>
                        </tbody>
                      </table>
                      
                      
                      <p class="salaryprocess">Salary processing</p>
                      <img src>
                      <table class="tb2">
                        <thead>
                          <tr >
                            <th></th>
                            <th>Hours</th>
                            <th>Amount</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr >
                            <td><b>Regular</b></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                          </tr>
                          <tr class="Over">
                            <td><b>Overtime</b></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                          </tr>
                        </tbody>
                      </table>
                      
                       
                          <lable class="t">Total:</lable>
                          <input class="u" type="text" id="total">

                          <input class ="submit" type="submit" value="Submit"> 
                          <br><br>
                         
                        </form>

<?php
include_once 'footer.php'
?>