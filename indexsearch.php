<?php
       require_once 'actions/db_connect.php';

       $sql = "SELECT `media`.`ISBN_No`, `media`.`MediaCode`, `media`.`Title`, `media`.`TitleImage`, `media`.`Description`, `media`.`MediaType`, `media`.`PublisherDate`, `media`.`Total_Count`, `media`.`Avail_Count`, `media`.`Location_ID`, `authors`.Name as authorName, `authors`.Surname as authorSurname, `publishers`.Name, `genres`.`GenreName`
       FROM `media`
       INNER JOIN `authors` ON `media`.`fk_Author_ID` = `authors`.`Author_ID`
       INNER JOIN publishers ON `media`.`fk_Publ_ID`  = `publishers`.`Publ_ID`
       INNER JOIN genres ON `media`.`fk_Genres_ID` = `genres`.`Genres_ID`
       INNER JOIN `employee` ON `media`.`fk_EmpAdmin_ID` = `employee`.`EmpAdmin_ID`";

       //when createing above like this `authors`.Name as authorName it is making it more simple to remember and link the name. Then used below. 
       $result = $connect->query($sql);

       echo "<table border='0' cellspacing='0' cellpadding='0' class='table table-bordered table-condensed'>
      <thead>
        <tr>
          <th>ISBN#</th>
          <th>Media Code</th>
          <th>Title</th>
          <th>Image</th>
          <th>Description</th>
          <th>Media Type</th>
          <th>Publisher Date</th>
          <th>Total Units</th>
          <th>Available Units</th>
          <th>Unit Location</th>
          <th>Author</th>
          <th>Publisher</th>
          <th>Genre</th>
        </tr>
      </thead>
      <tbody>";

       if($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
           echo "<tr>
           <td>".$row['ISBN_No']."</td>
           <td>".$row['MediaCode']."</td>
           <td>".$row['Title']."</td>
           <td><img src='".$row['TitleImage']."' width=100px></td>
           <td>".$row['Description']."</td>
           <td>".$row['MediaType']."</td>
           <td>".$row['PublisherDate']."</td>
           <td>".$row['Total_Count']."</td>
           <td>".$row['Avail_Count']."</td>
           <td>".$row['Location_ID']."</td>
           <td>".$row['authorName']." " .$row['authorSurname']."</td>
           <td>".$row['Name']."</td>
           <td>".$row['GenreName']."</td>
           </tr>";
           
         }
       } else {
         echo "<tr><td colspan='13'><center>No Data Avaliable</center></td></tr>";
       }
       echo "</tbody></table>";
       ?>