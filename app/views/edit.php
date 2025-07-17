 <h2 class="mb-4">Add Student</h2>
  <form class="">
    <div class="d-flex gap-2">
        <div class="mb-3 col-6">
        <label class="form-label">Full Name</label>
        <input type="text" class="form-control" placeholder="Enter full name" required>
        </div>
        <div class="mb-3 col-6">
        <label class="form-label">Gender</label>
        <select class="form-select" required>
            <option value="" disabled selected>Select gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        </div>
    </div>
    
    <div class="d-flex justify-content-end gap-2">
        <a href="index.html" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-warning">Update Student</button>
    </div>
  </form>