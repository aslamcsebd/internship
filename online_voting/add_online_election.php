<?php include('header.php'); ?>

<?php
if (isset($_POST['add_election'])) {
    $election_type = $_POST['election_type'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $details = $_POST['details'];

    $sql = "Insert Into online_election (title,type,details,date) values ('$title','$election_type','$details','$date')";
    $result = mysqli_query($vote, $sql);

//    $sql2 = "insert into $election_type values (null, '$title', '$date', '$details')";
//    $result2 = mysqli_query($vote, $sql2);

    if($result)
    {
        echo "<script>alert('Election Successfully Added!')</script>";
        echo "<script>window.open('add_online_election.php','_self')</script>";

    }

    else
    {
        echo "<script>alert('Failed!')</script>";
    }
}
?>

    <style type="text/css">
        .table td, .table th {
            border-top: none;
        }

        textarea {
            text-align: justify;
            white-space: normal;
        }
    </style>

    <div style="padding: 40px;"></div>
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">
            <div class="section-header">

            </div>
            <div class="row contact-info">
                <div class="col-md-3 col-sm-2 col-xs-12 col-sm-offset-2">
                    <?php include('leftSide.php'); ?>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12 col-sm-offset-2">
                    <table class="table">
                        <form action="" method="POST">
                            <tr>
                                <th width="150" class="text-right">Election type :</th>
                                <td class="text-left">

                                    <select name='election_type'
                                            style="  background-color: #1abc9c; font-size: 17px; padding: 5px 0px;">
                                        <option value="">Select Election Type</option>
                                        <?php
                                        $sql = "select * from elections";
                                        $result = mysqli_query($vote, $sql);
                                        $search = array("_");
                                        $replace = array(" ");
                                        while ($election = mysqli_fetch_assoc($result)) { ?>
                                            <?php $name = $election['name'];
                                            $elections = str_replace($search, $replace, $name); ?>
                                            <option value="<?= $election['name'] ?>"><?= $elections; ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th  class="text-right">Title :</th>
                                <td class="text-left">
                                    <input width="250" type="text" name="title" placeholder="" required>
                                </td>
                            </tr>
                            <tr>
                                <th width="150" class="text-right">Date :</th>
                                <td class="text-left">
                                    <input type="date" name="date" placeholder="">
                                </td>
                            </tr>
                            <tr>
                                <th width="150" class="text-right">Details :</th>
                                <td class="text-left">
                                    <textarea type="text" class="form-control" name="details" placeholder=""
                                              rows="8" required></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td class="text-left">
                                    <a href="election.php?election=<?php echo $name; ?>" class="btn btn-success"
                                       tyle="padding: 5px 20px; margin: 0 auto; ">Back</a>
                                    <button type="submit" name="add_election" class="btn btn-primary"
                                            onclick="return confirm('Are you sure?')">Add Now
                                    </button>
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </section>
<?php include('footer.php'); ?>