@extends('layouts.default')
@section('content')
<div class="custom-product">
  <div class="col-sm-10">
    <table>
      <tbody>
        <tr>
          <td>Amount</td>
          <td>$ {{$total}}</td>
        </tr>
        <tr>
          <td>Tax</td>
          <td>$ 0</td>
        </tr>
        <tr>
          <td>Delivery</td>
          <td>$ 10</td>
        </tr>
        <tr>
          <td>Total Amount</td>
          <td>$ {{ $total + 10 }}</td>
        </tr>
      </tbody>
    </table>
  </div>
  <form action="/orderplace" method="POST">
    @csrf
    <div class="form-group">
      <textarea name="address" placeholder="enter your address" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <label for="payment">Payment Method</label>
      <input type="radio" name="payment" value="cash"> <span>online payment</span>
      <input type="radio" name="payment" value="cash"> <span>EMI payment</span>
      <input type="radio" name="payment" value="cash"> <span>payment on delivery</span>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>
@endsection