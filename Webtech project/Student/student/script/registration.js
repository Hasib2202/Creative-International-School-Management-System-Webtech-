function courseAddDrop(course_id, buttonClass) {
  let registration_check = document.querySelector(`.${buttonClass}`);

  let xhttp = new XMLHttpRequest();
  xhttp.open(
    "GET",
    "../controller/courseAddDropController.php?course_id=" + course_id,
    true
  );
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText) {
        if (this.responseText == "added") {
          registration_check.value = "DROP COURSE";
        } else if (this.responseText == "dropped") {
          registration_check.value = "ADD COURSE";
        }
      } else {
        console.log(this.responseText);
      }
    }
  };
  xhttp.send("course_id=" + course_id);
}

function bookAddCancel(book_no, buttonClass) {
  let registration_check = document.querySelector(`.${buttonClass}`);

  let xhttp = new XMLHttpRequest();
  xhttp.open(
    "GET",
    "../controller/bookAddCancel.php?book_no=" + book_no,
    true
  );
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText) {
        if (this.responseText == "added") {
          registration_check.value = "CANCEL BOOK";
        } else if (this.responseText == "cancelled") {
          registration_check.value = "ADD BOOK";
        }
      } else {
        console.log(this.responseText);
      }
    }
  };
  xhttp.send("book_no=" + book_no);
}


function ifRegistered(course_id, buttonClass) {
  console.log(buttonClass);
  let xhttp = new XMLHttpRequest();
  xhttp.open(
    "GET",
    "../controller/ifRegisteredController.php?course_id=" + course_id,
    true
  );
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText) {
        let registration_check = document.querySelector(`.${buttonClass}`);

        registration_check.value = "DROP COURSE";
      }
    }
  };
  xhttp.send("course_id=" + course_id);
}

function ifAddedbook(book_no, buttonClass) {
  console.log(buttonClass);
  let xhttp = new XMLHttpRequest();
  xhttp.open(
    "GET",
    "../controller/bookAddition.php?book_no" + book_no,
    true
  );
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText) {
        let registration_check = document.querySelector(`.${buttonClass}`);

        registration_check.value = "CANCEL BOOK";
      }
    }
  };
  xhttp.send("book_no=" + book_no);
}


function search() {
  let course = document.getElementById("search").value;
  let result = document.getElementById("result");

  let xhttp = new XMLHttpRequest();
  xhttp.open(
    "GET",
    "../controller/courseSearchController.php?course=" +
      encodeURIComponent(course),
    true
  );
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      courses = JSON.parse(this.responseText);

      console.log(courses);

      let output = `
      <tr align = 'center'>
                      <td>ID</td>
                      <td>Course Name</td>
                      <td>Class</td>
                  </tr>
      `;

      for (let course of courses) {
        output += `
        <tr align = 'center'>
                      <td>${course.id}</td>
                      <td>${course.course_name}</td>
                      <td>${course.class}</td>
                    </tr>
        `;
      }

      result.innerHTML = output;
    }
  };
  xhttp.send("course=" + course);
}

function searchBook() {
  let book = document.getElementById("search").value;
  let result = document.getElementById("result");

  let xhttp = new XMLHttpRequest();
  xhttp.open(
    "GET",
    "../controller/bookSearchControl.php?books=" +
      encodeURIComponent(book),
    true
  );
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      courses = JSON.parse(this.responseText);

      console.log(books);

      let output = `
      <tr align = 'center'>
                      <td>No</td>
                      <td>Book Name</td>
                      <td>ID</td>
                  </tr>
      `;

      for (let book of books) {
        output += `
        <tr align = 'center'>
                      <td>${book.No}</td>
                      <td>${course.Book_name}</td>
                      <td>${course.ID}</td>
                    </tr>
        `;
      }

      result.innerHTML = output;
    }
  };
  xhttp.send("book=" + book);
}
