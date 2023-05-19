function toDelete(name) {
    $(document).ready(function() {
      var modal = document.getElementById("deleteModal");
      modal.style.display = "block";
  
      var title = document.getElementById("deleteModalLabel");
      title.innerHTML = "Delete " + name + "?";
  
      var deleteBtn = document.getElementById("deleteYes");
      deleteBtn.onclick = function() {
        // Perform the delete operation here
        alert("Deleting " + name);
        //modal.style.display = "none";
      };
  
      var cancelBtn = document.getElementById("deleteNo");
      cancelBtn.onclick = function() {
        modal.style.display = "none";
      };
    });
  }