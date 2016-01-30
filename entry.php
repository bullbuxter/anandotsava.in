<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="mains container">
      <h2>Event Entry</h2>
      <form class="form" action="" method="post">
        <div class="row">
          <div class="col-sm-offset-4 col-sm-4">
            <div class="form-group">
              <input type="text" name="evName" class="form-control" placeholder="Event Title" />
            </div>
            <div class="form-group">
              <textarea rows="4" name="evIntro" class="form-control" placeholder="Event Intro"></textarea>
            </div>
            <div class="form-group">
              <textarea rows="4" name="evRules" class="form-control" placeholder="Event Rules" /></textarea>
            </div>
            <div class="form-group">
              <select class="form-control" name="evCat">
                <option value="main">Main</option>
                <option value="creative">Creative</option>
                <option value="art">Art</option>
                <option value="dance">Dance</option>
                <option value="singing">Singing</option>
              </select>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            <a href="all.php" class="btn btn-success">View all</a>
          </div>
        </div>
      </form>
    </div>
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
