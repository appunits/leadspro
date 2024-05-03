<form name="mainForm" ng-submit="submitForm()">
   
    {{-- ... --}}

    <button type="submit" class="btn btn-primary" ng-disabled="mainForm.$invalid">Submit</button>
</form>
