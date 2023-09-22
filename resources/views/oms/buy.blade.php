<div class="row">
    <div class="col-md-4 form-group">
        <label>Select Company</label>
        <select class="form-control">
            <option>comp 1</option>
            <option>comp 2</option>
            <option>comp 3</option>
            <option>comp 4</option>
        </select>
    </div>

    <div class="col-md-4 form-group">
        <label>Enter Quantity</label>
        <input type="number" class="form-control" placeholder="number of share" id="quantity"
               onchange="calculateTotal()">
    </div>

    <div class="col-md-4 form-group">
        <label>Enter Price</label>
        <input type="number" class="form-control" placeholder="average rate" id="price" onchange="calculateTotal()">
    </div>

    <div class="col-md-4 form-group">
        <label>Total Amount</label>
        <input type="number" class="form-control" placeholder="total" id="total_amt" readonly>
    </div>


    <div class="col-md-4 form-group">
        <label>Total Purchase Power</label>
        <input type="number" class="form-control" placeholder="total" id="purchase_power" value="5000">
    </div>

    <div class="col-md-4 form-group">
        <label>% of investment</label>
        <input type="number" class="form-control" placeholder="%" id="percent_of_investment" readonly>
    </div>
    <div class="col-md-12">
        <br>
    </div>
    <button class="btn btn-success" onclick="loadOnGrid()">Show on grid</button>
</div>


<div class="row">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>A/C</th>
            <th>available balance</th>
            <th>Number of Share</th>
            <th>purchase amount</th>
        </tr>

        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td><input value="3000" class="form-control" name="ac_balance[]" id="ac_balance[1]" readonly></td>
            <td><input class="form-control" id="ac_share0"></td>
            <td><input class="form-control" id="ac_purchase0"></td>
        </tr>
        <tr>
            <td>2</td>
            <td><input value="2000" class="form-control" name="ac_balance[]" id="ac_balance[2]" readonly></td>
            <td><input class="form-control" id="ac_share1"></td>
            <td><input class="form-control" id="ac_purchase1"></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td>Total</td>
            <td>5000</td>
            <td><input class="form-control" id="total_ac_share"></td>
            <td><input class="form-control" id="total_ac_purchase"></td>

        </tr>
        </tfoot>
    </table>
</div>


<script>
    function calculateTotal(){


        quantity=$('#quantity').val();
        price=$('#price').val();
        purchasePower=$('#purchase_power').val();

        if(quantity && price){
            total=quantity*price;
            commission=total*0.35/100;
            $('#total_amt').val(total+commission);
            percent=((total+commission)/purchasePower)*100;
            $('#percent_of_investment').val(percent);
        }

    }

    function loadOnGrid(){
        var values = $("input[name='ac_balance[]']")
            .map(function(){return $(this).val();}).get();

        for (var i = 0; i <values.length; i++) {
            tmp=values[i];
            percent=$('#percent_of_investment').val();
            $('#ac_purchase'+i).val(tmp*percent/100);

            // Share Calculation
            quantity=$('#quantity').val();
            purchaseAmt=$('#ac_purchase'+i).val()*1;
            $('#ac_share'+i).val(Math.floor(purchaseAmt/price));



        }

        sumOfGrid();
    }

    function sumOfGrid(){
        var values = $("input[name='ac_balance[]']")
            .map(function(){return $(this).val();}).get();

        tmp=0*1;
        tmpShr=0*1;
        for (var i = 0; i <values.length; i++) {

            purchaseAmt=$('#ac_purchase'+i).val()*1;
            purchaseShr= $('#ac_share'+i).val()*1;

            tmp=tmp+purchaseAmt;
            tmpShr=tmpShr+purchaseShr;

        }
        $('#total_ac_purchase').val(tmp);
        $('#total_ac_share').val(tmpShr);
    }


</script>
