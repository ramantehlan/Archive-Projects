

<link rel='stylesheet' href='../aa_need/css/main.css'>
<script type='text/javascript' src='../../../../need/javascript/jquery/jquery.js'></script>
<?php
include "../../../../need/php_comman_plug/connect/connect.php";
include "../../../../need/php_comman_plug/get_info/info.php";
?>

<div class='question'>
                                                      <div class='message_of_question'>
                                                        <b>Change General Information</b> let you change your general information.<br> <br>
                                                     
                                                      </div>
                                               </div>

<h2>Change General Information</h2>

<?php

$id=$_SESSION['bunchup_id'];
$pass=$_SESSION['bunchup_pass'];




?>
<style>
.value_of_row{padding-left:0%;
           width:83%;}


</style>
<?php
if(isset($_GET['error']))
{
 $error=$_GET['error'];
   switch ($error) {
      case 'wrong_pass_pin':
                       echo "<div class='error_of_the_page'>Password and Pin error! Password and Pin combination typed by you was wrong please type again.</div> "; 
       break;
        case 'wrong_dob':
                       echo "<div class='error_of_the_page'>Age error! date of birth filled by your says that you are under 13, Please fill a valid date of birth.</div> "; 
       break;
     default:
                      echo "<div class='error_of_the_page'>Unknown error! Please fill the details again.</div> ";
       break;
   }
  }
?>
<div class='setting_box'>
   <form method='post' action='general_check_upload.php'>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Name</div>
          <div class='value_of_row'><input type='text' value='<?php echo $user_name; ?>' class='input_of_general' id='name' name='name' maxlength='50' placeholder='Name'>
                            
                    
          </div>
     </div>

     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Date of Birth</div>
          
          <?php 

                 switch($user_dob_m)
                 {
                 	case '1':
                          $month='January';
                 	break;
                 	case '2':
                          $month='February';
                 	break;
                 	case '3' :
                           $month='March';
                 	break;
                 	case '4' :
                         $month='April';
                 	break;
                 	case '5' :
                            $month='May';
                 	break;
                 	case '6':
                            $month='June';
                 	break;
                 	case '7':
                         $month='July';
                 	break;
                 	case '8':
                         $month='August';
                 	break;
                 	case '9':
                              $month='September';
                 	break;
                 	case '10':
                          $month='October';
                 	break;
                 	case '11':
                          $month='November';
                 	break;
                 	case '12':
                             $month='December';
                 	break;
                 }
          ?>
          <div class='value_of_row'>
              <select name="birthday_year" id="year_up" class="input_of_general" style="width:30%;float:right;">
                                                      <option value="<?php echo $user_dob_y; ?>" selected><?php echo $user_dob_y; ?></option>
                                                      <option value="">Year</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2000">2000</option>
                                                    <option value="1999">1999</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1981">1981</option>
                                                    <option value="1980">1980</option>
                                                    <option value="1979">1979</option>
                                                    <option value="1978">1978</option>
                                                    <option value="1977">1977</option>
                                                    <option value="1976">1976</option>
                                                    <option value="1975">1975</option>
                                                    <option value="1974">1974</option>
                                                    <option value="1973">1973</option>
                                                    <option value="1972">1972</option>
                                                    <option value="1971">1971</option>
                                                    <option value="1970">1970</option>
                                                    <option value="1969">1969</option>
                                                    <option value="1968">1968</option>
                                                    <option value="1967">1967</option>
                                                    <option value="1966">1966</option>
                                                    <option value="1965">1965</option>
                                                    <option value="1964">1964</option>
                                                    <option value="1963">1963</option>
                                                    <option value="1962">1962</option>
                                                    <option value="1961">1961</option>
                                                    <option value="1960">1960</option>
                                                    <option value="1959">1959</option>
                                                    <option value="1958">1958</option>
                                                    <option value="1957">1957</option>
                                                    <option value="1956">1956</option>
                                                    <option value="1955">1955</option>
                                                    <option value="1954">1954</option>
                                                    <option value="1953">1953</option>
                                                    <option value="1952">1952</option>
                                                    <option value="1951">1951</option>
                                                    <option value="1950">1950</option>
                                                    <option value="1949">1949</option>
                                                    <option value="1948">1948</option>
                                                    <option value="1947">1947</option>
                                                    <option value="1946">1946</option>
                                                    <option value="1945">1945</option>
                                                    <option value="1944">1944</option>
                                                    <option value="1943">1943</option>
                                                    <option value="1942">1942</option>
                                                    <option value="1941">1941</option>
                                                    <option value="1940">1940</option>
                                                    <option value="1939">1939</option>
                                                    <option value="1938">1938</option>
                                                    <option value="1937">1937</option>
                                                    <option value="1936">1936</option>
                                                    <option value="1935">1935</option>
                                                    <option value="1934">1934</option>
                                                    <option value="1933">1933</option>
                                                    <option value="1932">1932</option>
                                                    <option value="1931">1931</option>
                                                    <option value="1930">1930</option>
                                                    <option value="1929">1929</option>
                                                    <option value="1928">1928</option>
                                                    <option value="1927">1927</option>
                                                    <option value="1926">1926</option>
                                                    <option value="1925">1925</option>
                                                    <option value="1924">1924</option>
                                                    <option value="1923">1923</option>
                                                    <option value="1922">1922</option>
                                                    <option value="1921">1921</option>
                                                    <option value="1920">1920</option>
                                                    <option value="1919">1919</option>
                                                    <option value="1918">1918</option>
                                                    <option value="1917">1917</option>
                                                    <option value="1916">1916</option>
                                                    <option value="1915">1915</option>
                                                    <option value="1914">1914</option>
                                                    <option value="1913">1913</option>
                                                    <option value="1912">1912</option>
                                                    <option value="1911">1911</option>
                                                    <option value="1910">1910</option>
                                                    <option value="1909">1909</option>
                                                    <option value="1908">1908</option>
                                                    <option value="1907">1907</option>
                                                    <option value="1906">1906</option>
                                                    <option value="1905">1905</option>
                                                  </select>
                  <select type='month' id="month_up" name='birthday_month' class="input_of_general" style='width:30%;margin-left:2.5%;margin-right:2.5%;float:right;' >
                                                      <option value="<?php echo $user_dob_m; ?>" selected><?php echo $month ?></option>
                                                      <option  value="" >Month</option>
                                                      <option  value='01'>January</option>
                                                      <option  value='02'>February</option>
                                                      <option  value='03'>March</option>
                                                      <option  value='04'>April</option>
                                                      <option  value='05'>May</option>
                                                      <option  value='06'>June</option>
                                                      <option  value='07'>July</option>
                                                      <option  value='08'>August</option>
                                                      <option  value='09'>September</option>
                                                      <option  value='10'>October</option>
                                                      <option  value='11'>November</option>
                                                      <option  value='12'>December</option>
                                                  </select>
               <select type='date' id="date_up" name='birthday_date' class="input_of_general" value='03' style='width:30%;float:right;' >
                                                      <option value="<?php echo $user_dob_d; ?>" selected><?php echo $user_dob_d; ?></option>
                                                      <option value=''>Date</option>
                                                      <option value='01'>01</option>
                                                      <option value='02'>02</option>
                                                      <option value='03'>03</option>
                                                      <option value='04'>04</option>
                                                      <option value='05'>05</option>
                                                      <option value='06'>06</option>
                                                      <option value='07'>07</option>
                                                      <option value='08'>08</option>
                                                      <option value='09'>09</option>
                                                      <option value='10'>10</option>
                                                      <option value='11'>11</option>
                                                      <option value='12'>12</option>
                                                      <option value='13'>13</option>
                                                      <option value='14'>14</option>
                                                      <option value='15'>15</option>
                                                      <option value='16'>16</option>
                                                      <option value='17'>17</option>
                                                      <option value='18'>18</option>
                                                      <option value='19'>19</option>
                                                      <option value='20'>20</option>
                                                      <option value='21'>21</option>
                                                      <option value='22'>22</option>
                                                      <option value='23'>23</option>
                                                      <option value='24'>24</option>
                                                      <option value='25'>25</option>
                                                      <option value='26'>26</option>
                                                      <option value='27'>27</option>
                                                      <option value='28'>28</option>
                                                      <option value='29'>29</option>
                                                      <option value='30'>30</option>
                                                      <option value='31'>31</option>
                                                  </select>
                
  
                                               

                                                 
                                              
          </div>
     </div>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Gender</div>
          <div class='value_of_row'>
                                   <select type="gender" id="gender_up" name="gender" class="input_of_general"  ><br>
                                    <option value="<?php echo $user_gender; ?>" selected><?php echo $user_gender; ?></option>
                                                       <option  value="" >Gender</option>
                                                       <option  value="Female">Female</option>
                                                       <option  value="Male">Male</option>
                                                        <option  value="Other">Other</option>
                                                </select>
          </div>
     </div>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Country</div>
          <div class='value_of_row'>
          
                        <select type="country" id="country_up" name="country" class="input_of_general" >
                                                        <option value="<?php echo $user_country; ?>" selected><?php echo $user_country; ?></option>
                                                      <option value="" >Select Your Country</option>
                                                      <option value="Afghanistan">Afghanistan </option>
                                                    <option value="Åland Islands">Åland Islands</option>
                                                    <option value="Albania (Shqipëria)">Albania (Shqipëria)</option>
                                                    <option value="Algeria">Algeria </option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia </option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria (Österreich)">Austria (Österreich)</option>
                                                    <option value="Azerbaijan (Azrbaycan)">Azerbaijan (Azrbaycan)</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain </option>
                                                    <option value="Bangladesh">Bangladesh </option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus (´)">Belarus (´)</option>
                                                    <option value="Belgium (België)">Belgium (België)</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin (Bénin)">Benin (Bénin)</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan ">Bhutan </option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegovina (Bosna i Hercegovina)">Bosnia and Herzegovina (Bosna i Hercegovina)</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil (Brasil)"> Brazil (Brasil)</option>
                                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                    <option value="British Virgin Islands">British Virgin Islands</option>
                                                    <option value="Brunei (Brunei Darussalam)">Brunei (Brunei Darussalam)</option>
                                                    <option value="Bulgaria">Bulgaria </option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value=" Burundi (Uburundi)">Burundi (Uburundi)</option>
                                                    <option value="Cambodia (Kampuchea">Cambodia (Kampuchea)</option>
                                                    <option value="Cameroon (Cameroun)">Cameroon (Cameroun)</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde (Cabo Verde)">Cape Verde (Cabo Verde)</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic (République Centrafricaine)">Central African Republic (République Centrafricaine)</option>
                                                    <option value="Chad (Tchad)">Chad (Tchad)</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China ">China </option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros (Comores)">Comoros (Comores)</option>
                                                    <option value="Congo [DRC]">Congo [DRC]</option>
                                                    <option value="Congo [Republic]">Congo [Republic]</option>
                                                    <option value=" Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Côte d’Ivoire">Côte d’Ivoire</option>
                                                    <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus (p)">Cyprus (p)</option>
                                                    <option value="Czech Republic (Cesko)">Czech Republic (Cesko)</option>
                                                    <option value="Denmark (Danmark)">Denmark (Danmark)</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt ">Egypt </option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea (Guinea Ecuatorial)">Equatorial Guinea (Guinea Ecuatorial)</option>
                                                    <option value="Eritrea (Ertra)">Eritrea (Ertra)</option>
                                                    <option value="Estonia (Eesti)">Estonia (Eesti)</option>
                                                    <option value="Ethiopia (Ityop&#39;iya)">Ethiopia (Ityop&#39;iya)</option>
                                                    <option value="Falkland Islands [Islas Malvinas]">Falkland Islands [Islas Malvinas]</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland (Suomi)">Finland (Suomi)</option>
                                                    <option value="France">France</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern Territories</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Germany (Deutschland)">Germany (Deutschland) </option>
                                                    <option value="Germany (Deutschland)">Germany (Deutschland)</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece </option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guernsey">Guernsey</option>
                                                    <option value="Guinea (Guinée)">Guinea (Guinée)</option>
                                                    <option value="Guinea-Bissau (Guiné-Bissau)">Guinea-Bissau (Guiné-Bissau)</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti (Haïti)">Haiti (Haïti)</option>
                                                    <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary (Magyarország)">Hungary (Magyarország)</option>
                                                    <option value="Iceland (Ísland)">Iceland (Ísland)</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran </option>
                                                    <option value="Iraq ">Iraq </option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Isle of Man">Isle of Man</option>
                                                    <option value="Israel">Israel </option>
                                                    <option value="Italy (Italia)">Italy (Italia)</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan </option>
                                                    <option value="Jersey">Jersey</option>
                                                    <option value="Jordan">Jordan </option>
                                                    <option value="Kazakhstan">Kazakhstan </option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Kuwait">Kuwait </option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan </option>
                                                    <option value="Laos">Laos </option>
                                                    <option value="atvia (Latvija)">Latvia (Latvija)</option>
                                                    <option value="Lebanon">Lebanon </option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libya">Libya </option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania (Lietuva)">Lithuania (Lietuva)</option>
                                                    <option value="Luxembourg (Lëtzebuerg)">Luxembourg (Lëtzebuerg)</option>
                                                    <option value="Macau">Macau</option>
                                                    <option value="Macedonia [FYROM]">Macedonia [FYROM] </option>
                                                    <option value="Madagascar (Madagasikara)">Madagascar (Madagasikara)</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives ( )">Maldives ( )</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania </option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico (México)">Mexico (México)</option>
                                                    <option value="Micronesia">Micronesia</option>
                                                    <option value="Moldova">Moldova</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia ( )">Mongolia ( )</option>
                                                    <option value="Montenegro ( )">Montenegro ( )</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco </option>
                                                    <option value="Mozambique (Moçambique)">Mozambique (Moçambique)</option>
                                                    <option value="Myanmar [Burma] (Myanmar (Burma))">Myanmar [Burma] (Myanmar (Burma))</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru (Naoero)">Nauru (Naoero)</option>
                                                    <option value="Nepal">Nepal </option>
                                                    <option value="Netherlands (Nederland)">Netherlands (Nederland)</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                    <option value="North Korea ">North Korea </option>
                                                    <option value="Norway (Norge)">Norway (Norge)</option>
                                                    <option value="Oman">Oman </option>
                                                    <option value="Pakistan ">Pakistan </option>
                                                    <option value="Palau (Belau)">Palau (Belau)</option>
                                                    <option value="Palestinian Territories">Palestinian Territories</option>
                                                    <option value="Panama (Panamá)">Panama (Panamá)</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru (Perú)">Peru (Perú)</option>
                                                    <option value="Philippines (Pilipinas)">Philippines (Pilipinas)</option>
                                                    <option value="Pitcairn Islands">Pitcairn Islands</option>
                                                    <option value="Poland (Polska)">Poland (Polska)</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value=" Qatar ">Qatar </option>
                                                    <option value="Réunion">Réunion</option>
                                                    <option value="Romania (România)">Romania (România)</option>
                                                    <option value="Russia">Russia </option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Helena">Saint Helena</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="São Tomé and Príncipe">São Tomé and Príncipe</option>
                                                    <option value="Saudi Arabia (  )">Saudi Arabia (  )</option>
                                                    <option value="Senegal (Sénégal)">Senegal (Sénégal)</option>
                                                    <option value="Serbia">Serbia </option>
                                                    <option value="Serbia and Montenegro (   )">Serbia and Montenegro (   )</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore (Singapura)">Singapore (Singapura)</option>
                                                    <option value="Slovakia (Slovensko)">Slovakia (Slovensko)</option>
                                                    <option value="Slovenia (Slovenija)">Slovenia (Slovenija)</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia (Soomaaliya)">Somalia (Soomaaliya)</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                    <option value="South Korea">South Korea </option>
                                                    <option value="Spain (España)">Spain (España)</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan </option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden (Sverige)">Sweden (Sverige)</option>
                                                    <option value="Switzerland (Schweiz)">Switzerland (Schweiz)</option>
                                                    <option value="Syria ">Syria </option>
                                                    <option value="Taiwan ">Taiwan </option>
                                                    <option value="Tajikistan">Tajikistan </option>
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Thailand">Thailand </option>
                                                    <option value="Timor-Leste">Timor-Leste</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia </option>
                                                    <option value="Turkey (Türkiye)">Turkey (Türkiye)</option>
                                                    <option value="Turkmenistan (Türkmenistan)">Turkmenistan (Türkmenistan)</option>
                                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
                                                    <option value="U.S. Virgin Islands">U.S. Virgin Islands</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine ">Ukraine </option>
                                                    <option value="United Arab Emirates (  )">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan (O&#39;zbekiston)">Uzbekistan </option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Vatican City (Città del Vaticano)">Vatican City (Città del Vaticano)</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam (Vit Nam)">Vietnam (Vit Nam)</option>
                                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                    <option value="Western Sahara">Western Sahara </option>
                                                    <option value="Yemen">Yemen </option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                  </select>
          </div>
     </div>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Home Town</div>
          <div class='value_of_row'>
            <input type='text' name='home' value='<?php echo $user_home_town; ?>' class='input_of_general' id='home'></div>
     </div>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>Birth Town</div>
          <div class='value_of_row'>
            <input type='text' name='birth' value='<?php echo $user_birth_town; ?>' class='input_of_general' id='birth'></div>
     </div>
     <div class='row_of_items_in_general'>
          <div class='title_of_row'>School</div>
          <div class='value_of_row'>
            <input type='text' name='school' value='<?php echo $user_school; ?>' class='input_of_general' id='school'></div>
     </div>
    

      <div class='row_of_items_in_general' style='text-align:center;height:30px;margin-top:10px;float:left;margin-bottom:10px;'>
                       <input type='password' name='pass'  placeholder='Password' class='input_of_security' id='password' maxlength='50'> 
                                        <input type='password' name='pin' maxlength='6' class='input_of_security' id='pin' placeholder='Pin'>
     </div>

   <div class='box_of_option_for_setting'>
    <div class='check_display'></div>
      <div class='message_of_error'></div>
      <a href='general.php'><input type='button' class='Edit_option' value='Exit'></a>
      <input type='submit' class='Edit_option' id='save' value='Save'>
    </form>
  </div>




</div>
<script type='text/javascript' src='../aa_need/javascript/check_general.js'></script>








