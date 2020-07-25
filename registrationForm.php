<html>
<head>
  
  <title>Register Form </title>

</head>
<body>
  
  <table border="1">
    <form action="backend.php" method="POST">

     <tr height="70px">
      <td colspan="3" align="center">
        <b>Personal Profile</b>

      </td>
     </tr>

     <tr height="50px">
      <td width="100px" align="center">Name: </td>
      <td width="200px" align="center">
        <input type="text" name="name" value=""> <br/>
      </td>
      <td width="50px"></td>

     </tr>

     <tr height="50px">
      <td width="100px" align="center"> Email: </td>
      
      <td width="200px" align="center">
        <input type="Email" name="email" value=""> <br/>
      </td>
      <td width="50px"></td>
     </tr>

     <tr height="50px">
      <td width="100px" align="center"> Gender: </td>
        
      <td width="200px" align="center">
        <input type="radio" name="gender">male
        <input type="radio" name="gender">female
        <input type="radio" name="gender">other 
        <br/>
      </td>
      <td width="50px"> </td>
     </tr>
    
     <tr height="50px">
      <td width="100px" align="center"> Date Of Birth: </td>
        
      
      <td width="200px" align="center">
        <input type="number" name="dateOfBirth"> 
        <input type="text" name="dateOfBirth"> 
        <input type="number" name="dateOfBirth"> 
        <i>(dd/mm/yyyy)</i> <br/>
      </td>
      <td width="50px"> </td>

     </tr>

     <tr height="50px">
      <td width="100px" align="center"> Blood Group: </td>
        
      <td width="200px" align="center">
        <select name="bloodGroup">
          <option>A+</option>
          <option>B+</option>
          <option>AB+</option>
          <option>O+</option>
          <option>A-</option>
          <option>B-</option>
          <option>AB-</option>
          <option>O-</option>
          
        </select>
       <br/>
      </td>
      <td width="50px"> </td>

     </tr>

     <tr height="50px">
      <td width="100px" align="center"> Degree: </td>
        
      <td width="200px" align="center">
        <input type="checkbox" name="Degree">SSC
        <input type="checkbox" name="degree">HSC
        <input type="checkbox" name="degree">BSc
        <input type="checkbox" name="degree">MSc
        <br/>
      </td>

      <td width="50px"> </td>
     </tr>

     <tr height="50px">
      <td width="100px" align="center"> Photo: </td>

      <td colspan="2" width="250px" align="center">
        <input type="file" name="picture" size="">
        <br/>
      </td>
      
      
     </tr>
    
     <tr height="50px">
      <td colspan="3" align="center">
        

      </td>
     </tr>

     <tr height="50px">
      <td colspan="3" align="right">
        <input type="button" name="submit" value="submit">
        <input type="button" name="reset" value="reset">

        

      </td>
     </tr>

    </form>


  </table>
</body>
</html> 