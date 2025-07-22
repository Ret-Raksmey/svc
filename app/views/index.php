<h2 class="mb-4">Student List</h2>
<a href="index.php?page=create" class="btn btn-primary mb-3">+ Add Student</a>
    
<table class="table table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th class="text-center">N<sup>o</sup></th>
          <th>ID</th>
          <th>Name</th>
          <th>Gender</th>
          <th>Telephone</th>
          <th class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
            if(isset($students) && !empty($students)){
              $no = 1;
                foreach($students as $s){
                  $id = $s['id'];
                  $name = $s['name'];
                  $gender = $s['gender'];
                  $tel = $s['tel'];
                        
                  echo <<<html
                    <tr>
                      <td class="text-center">$no</td>
                      <td>USER- ID :$id</td>
                      <td>$name</td>
                      <td>$gender</td>
                      <td>$tel</td>
                      <td class="text-center">
                        <a href="index.php?page=edit&id=$id" class="btn btn-sm btn-warning">Edit</a>
                        <a href="index.php?page=destroy&id=$id" 
                          class="btn btn-sm btn-danger"
                          onclick="return confirm('Are you sure you want to delete this student?');">Delete</a>
                      </td>
                    </tr>
                  html;
                  $no++; // ✅ Move this INSIDE the foreach loop
                }
            } else {
                echo '<tr><td colspan="6" class="text-center text-muted">No students found. <a href="index.php?page=create">Add the first student</a></td></tr>';
            }
        ?>
      </tbody>
</table>