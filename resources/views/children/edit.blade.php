@extends('layouts.master')
@section("content")
    <h1>Хүүхдийн мэдээлэлийн засах</h1>
        <!-- Alert -->
        @if(session('success'))
            <div class="alert alert-success" role="alert">
            {{session('success')}}
            </div>
        @endif
        <!-- Alert -->
        <div class="row">
        <div class="col-lg-12">
        <div class="container">
      <form action="/children/{{$child->id}}/update" method="post">
      @csrf
        <div class="panel panel-default">
          <!-- <div class="panel-heading" style="background-color: white;">
            <div class="row">
              <div class="col-xs-6">
                  <h4>Хүүхдийн мэдээлэл нэмэх</h4>
              </div>
              </div>
          </div> -->
          <div class="panel-body">
            <div class="form-group">
              <label for="studentLName">Овог</label>
              <input type="text" class="form-control" id="LName" name="ovog" placeholder="Жишээ: Лхагвасүрэн" value="{{$child->ovog}}">
            </div>
            <div class="form-group">
              <label for="studentFName">Нэр</label>
              <input type="text" class="form-control" id="FName" name="ner" placeholder="Жишээ: Батбаяр" value="{{$child->ner}}">
            </div>
            <div class="form-group">
            <label for="birthday">Төрсөн өдөр</label>
            <input type="date" class="form-control" id="birthday" name="date_of_birth" value="{{$child->date_of_birth}}">
            </div>
            <div class="form-group">
              <label for="studentId">Регистер дугаар</label>
              <input type="text" class="form-control" id="rId" name="r_number" placeholder="Регистер дугаар" value="{{$child->r_number}}">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="studentGender">Хүйс</label>
              <select class="form-control" id="Gender" name="hvis">
                <option>-- Сонгох --</option>
                <option value="male"   @if($child->hvis == "male") selected @endif>Эр</option>
                <option value="female" @if($child->hvis == "female") selected @endif>Эм</option>

              </select>
            </div>
            <div class="panel-footer" style="background-color: white;">
              <button type="submit" name="submit" class="btn btn-success">Update</button>
          </div>
          </form>
            
          </div>
          
        </div>
        </div>
        
        </div>

@endsection
