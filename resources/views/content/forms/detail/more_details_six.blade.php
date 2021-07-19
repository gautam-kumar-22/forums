<script id="details-template" type="text/x-handlebars-template">
<div class="form-horizontal">
    <br><div class="form-group">
    <div class="row">
        <div class="col-sm">
            <label  class="col-sm control-label" for="title">Full Name</label>
            <input type="readonly" class="form-control" value="@{{name}}" readonly />
        </div>
        <div class="col-sm">
            <label  class="col-sm control-label" for="title">Email</label>
            <input type="readonly" class="form-control" value="@{{email}}" readonly />
        </div>
    </div>

    <br><div class="form-group">
        <div class="row">
            <div class="col-sm">
                <label  class="col-sm control-label" for="title">Receipt Name</label>
                <input type="readonly" class="form-control" value="@{{receipt_name}}" readonly />
            </div>
            <div class="col-sm">
                <label  class="col-sm control-label" for="title">Gender</label>
                <input type="readonly" class="form-control" value="@{{gender}}" readonly />
            </div>
        </div>
    </div>
    <br><div class="form-group">
        <div class="row">
            <div class="col-sm">
                <label  class="col-sm control-label" for="title">Occassion</label>
                <input type="readonly" class="form-control" value="@{{occassion}}" readonly />
            </div>
            <div class="col-sm">
                <label  class="col-sm control-label" for="title">Date Of Occassion</label>
                <input type="readonly" class="form-control" value="@{{date_of_occassion}}" readonly />
            </div>
        </div>
    </div>
    <br><div class="form-group">
        <div class="row">
        <div class="col-sm">
                <label  class="col-sm control-label" for="title">Remind Me Days</label>
                <input type="readonly" class="form-control" value="@{{remind_me_days}}" readonly />
            </div>
            <div class="col-sm">
                <label  class="col-sm control-label" for="title">Notes</label>
                <input type="readonly" class="form-control" value="@{{notes}}" readonly />
            </div>

        </div>
    </div>



   </div>
</script>
