<script id="details-template" type="text/x-handlebars-template">
<div class="form-horizontal">
    <br><div class="form-group">
    <div class="row">
        <div class="col-sm">
            <label  class="col-sm control-label" for="title">First Name</label>
            <input type="readonly" class="form-control" value="@{{first_name}}" readonly />
        </div>
        <div class="col-sm">
            <label  class="col-sm control-label" for="title">Last Name</label>
            <input type="readonly" class="form-control" value="@{{last_name}}" readonly />
        </div>
    </div>

    <br><div class="form-group">
        <div class="row">
            <div class="col-sm">
                <label  class="col-sm control-label" for="title">Email</label>
                <input type="readonly" class="form-control" value="@{{email}}" readonly />
            </div>
            <div class="col-sm">
                <label  class="col-sm control-label" for="title">Phone Number</label>
                <input type="readonly" class="form-control" value="@{{phone_number}}" readonly />
            </div>
        </div>
    </div>
    <br><div class="form-group">
        <div class="row">
            <div class="col-sm">
                <label  class="col-sm control-label" for="title">Subject</label>
                <input type="readonly" class="form-control" value="@{{subject}}" readonly />
            </div>
            <div class="col-sm">
                <label  class="col-sm control-label" for="title">Message</label>
                <input type="readonly" class="form-control" value="@{{message}}" readonly />
            </div>
        </div>
    </div>





   </div>
</script>
