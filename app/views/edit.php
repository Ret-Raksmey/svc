
<h2 class="mb-4">Update Student</h2>
<form method="POST">
    <div class="d-flex gap-2">
        <div class="mb-3 col-4">
            <label class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter full name" 
                   value="<?php echo isset($student) ? htmlspecialchars($student['name']) : ''; ?>" required>
        </div>
        <div class="mb-3 col-4">
            <label class="form-label">Gender</label>
            <select name="gender" class="form-select" required>
                <option value="" disabled>Select gender</option>
                <option value="Male" <?php echo (isset($student) && $student['gender'] === 'Male') ? 'selected' : ''; ?>>Male</option>
                <option value="Female" <?php echo (isset($student) && $student['gender'] === 'Female') ? 'selected' : ''; ?>>Female</option>
            </select>
        </div>
        <div class="mb-3 col-4">
            <label class="form-label">Telephone</label>
            <input type="text" name="tel" class="form-control" placeholder="Enter Telephone" 
                   value="<?php echo isset($student) ? htmlspecialchars($student['tel']) : ''; ?>" required>
        </div>
    </div>
    
    <div class="d-flex justify-content-end gap-2">
        <a href="index.php" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-warning">Update Student</button>
    </div>
</form>