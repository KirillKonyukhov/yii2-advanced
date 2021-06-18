<body>
<form>
<div class="col-md-9">
	<div class="banner-form-agileinfo">
		<h5>Рассчитать <span>Грузоперевозку</span>!!</h5>
  <div class="row mb-3">
    <div class="form-group col-md-6 col-sm-6">
      <p class="badge badge-warning">Вес (кг)</p>
      <input type="text" name="date" class="form-control" id="weight" required="" placeholder="1500" required=""/>
      <p class="badge badge-warning">Объем (куб²)</p>
      <input type="text" name="adress" id="vol" class="form-control" placeholder="2" required=""/>
    </div>
  </div>
  <div class="custom-control custom-checkbox row d-flex justify-content-center mb-3">
    <div class="col-md-3" style="visibility: visible;">
      <input type="checkbox" id="load" name="mess" class="custom-control-input"/>
      <a> <label class="custom-control-label" for="load">Нужна погрузка</label></a>
    </div>
    <div class="col-md-3" style="visibility: visible;">
      <input type="checkbox" id="del" name="mess" class="custom-control-input"/>
      <a><label class="custom-control-label" for="del">Нужны грузчики</label></a>
    </div>
 
    <div class="col-md-3" style="visibility: visible;">
      <input type="checkbox" id="frag" name="mess" class="custom-control-input"/>
      <a><label class="custom-control-label" for="frag">Хрупкий груз</label></a>
    </div>
  </div>
  <div class="row mb-3">
 
    <div class="form-group col-md-12">
      <label for="range">Расстояние <span class="rasstoyanie">0</span> <span>км</span></label>
      <input type="range" class="custom-range" min="50" max="5000" step="50" id="range" value="500"/>
    </div>
 
  </div>
  <div class="row col-12 mb-3"><span id="out">0.0</span> <span class="rub">₽</span></div>
  <div class="row">
      <div class="col-md-2 col-12">
        <input type="button" name="adress" id="btn" class="btn-block btn btn-primary" value="Считать"/>
        </div>
              </div>
            </form>
          </div>
        
      </div>
    </div>
  </section>
    <script type="text/javascript">
      var btn = document.querySelector('#btn'),
      out = document.querySelector('#out'),
      weight = document.querySelector('#weight'),
      vol = document.querySelector('#vol'),
      load = document.querySelector('#load'),
      del = document.querySelector('#del'),
      frag = document.querySelector('#frag'),
      range = document.querySelector('#range'),
      rasstoyanie = document.querySelector('.rasstoyanie').innerHTML = 500;
      weight = document.querySelector('#weight'),
      vol = document.querySelector('#vol'),
      kg = 55,
      kub = 7000,
      km = 50;
 
      range.onchange = function(){
        var rasstoyanie = document.querySelector('.rasstoyanie').innerHTML = range.value;
      }
   
        btn.onclick = function(){
          
          if (weight.value != '' && vol.value != '') {
              if (load.checked){ 
                  load.value = 1500; }
                else 
                {
                  load.value = 0;
              }
              if (del.checked){ 
                  del.value = 3500; }
                else 
                {
                  del.value = 0;
              }
              if (frag.checked){ 
                  frag.value = 2000; }
                else 
                {
                  frag.value = 0;
              }
            
  var sum = (weight.value * kg) + (vol.value * kub) + Number(load.value) + + Number(del.value) + Number(frag.value) + (range.value * km);
  if (isNaN(sum)) {
        alert('Введите числовое значение');
      }else{
        out.innerHTML = sum;
        }
    
          }else{
        alert('Введите вес и объем груза');
      }
       
      }
    </script>
  
  </body>
  </html>