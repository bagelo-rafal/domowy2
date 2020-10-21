<form id="create-staff" action="">
  <div class="form-group row">
  <label for="name" class="col-3 col-form-label">Imię i nazwisko</label>
  <div class="col-9">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-address-card"></i>
        </div>
      </div>
      <input id="name" name="name" type="text" class="form-control">
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="email" class="col-3 col-form-label">Adres e-mail</label>
  <div class="col-9">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-at"></i>
        </div>
      </div>
      <input id="email" name="email" type="text" class="form-control">
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="doctor-phone" class="col-3 col-form-label">Numer telefonu</label>
  <div class="col-9">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-phone"></i>
        </div>
      </div>
      <input id="doctor-phone" name="doctor-phone" type="text" class="form-control">
    </div>
  </div>
</div>
<div class="form-group row pwz">
  <label class="col-3 col-form-label" for="pwz">Numer PWZ</label>
  <div class="col-9">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-barcode"></i>
        </div>
      </div>
      <input id="pwz" name="pwz" type="text" class="form-control">
    </div>
  </div>
</div>
<div class="form-group row spec">
   <label for="spec" class="col-3 col-form-label">Specjalizacja</label>
   <div class="col-9">
    <select id="doctor_spec" name="doctor_spec" class="custom-select">
      	<option value="">wybierz</option>
      	<option value="45">alergolog</option>
      	<option value="172">alergolog dziecięcy</option>
      	<option value="46">androlog</option>
      	<option value="47">anestezjolog</option>
      	<option value="163">angiochirurg</option>
      	<option value="167">angiolog</option>
      	<option value="49">audiolog, foniatra</option>
      	<option value="64">bariatra</option>
      	<option value="67">biegły sądowy</option>
      	<option value="50">chirurg</option>
      	<option value="120">chirurg dziecięcy</option>
      	<option value="108">chirurg naczyniowy</option>
      	<option value="51">chirurg plastyczny</option>
      	<option value="160">chirurg stomatologiczny</option>
      	<option value="110">chirurg szczękowo-twarzowy</option>
      	<option value="52">dermatolog</option>
      	<option value="94">diabetolog</option>
      	<option value="171">diabetolog dziecięcy</option>
      	<option value="96">diagnostyk</option>
      	<option value="98">dietetyk</option>
      	<option value="53">endokrynolog</option>
      	<option value="168">endokrynolog dziecięcy</option>
      	<option value="84">fizjoterapeuta</option>
      	<option value="184">fizjoterapeuta dziecięcy</option>
      	<option value="128">flebolog</option>
      	<option value="54">gastrolog</option>
      	<option value="161">gastrolog dziecięcy</option>
      	<option value="55">genetyk</option>
      	<option value="56">geriatra</option>
      	<option value="57">ginekolog</option>
      	<option value="169">ginekologia dziecięca</option>
      	<option value="58">hematolog</option>
      	<option value="181">hematolog dziecięcy</option>
      	<option value="159">hepatolog</option>
      	<option value="164">higienistka stomatologiczna</option>
      	<option value="132">hipertensjolog</option>
      	<option value="59">histopatolog</option>
      	<option value="130">immunolog</option>
      	<option value="61">internista</option>
      	<option value="138">kardiochirurg</option>
      	<option value="62">kardiolog</option>
      	<option value="122">kardiolog dziecięcy</option>
      	<option value="63">laryngolog</option>
      	<option value="126">laryngolog dziecięcy</option>
      	<option value="112">lekarz chorób zakaźnych</option>
      	<option value="65">lekarz medycyny pracy</option>
      	<option value="154">lekarz medycyny ratunkowej</option>
      	<option value="106">lekarz rehabilitacji medycznej</option>
      	<option value="66">lekarz rodzinny</option>
      	<option value="68">lekarz sportowy</option>
      	<option value="140">lekarz w trakcie specjalizacji</option>
      	<option value="104">logopeda</option>
      	<option value="69">nefrolog</option>
      	<option value="174">nefrolog dziecięcy</option>
      	<option value="136">neonatolog</option>
      	<option value="70">neurochirurg</option>
      	<option value="170">neurochirurg dziecięcy</option>
      	<option value="71">neurolog</option>
      	<option value="118">neurolog dziecięcy</option>
      	<option value="73">okulista</option>
      	<option value="146">okulista dziecięcy</option>
      	<option value="74">onkolog</option>
      	<option value="182">onkolog dziecięcy</option>
      	<option value="158">optometrysta</option>
      	<option value="75">ortodonta</option>
      	<option value="76">ortopeda</option>
      	<option value="144">ortopeda dziecięcy</option>
      	<option value="177">ortoptysta</option>
      	<option value="176">osteopata</option>
      	<option value="77">patomorfolog</option>
      	<option value="78">pediatra</option>
      	<option value="175">perinatolog</option>
      	<option value="79">położna/położny</option>
      	<option value="80">proktolog</option>
      	<option value="134">protetyk</option>
      	<option value="81">psychiatra</option>
      	<option value="148">psychiatra dziecięcy</option>
      	<option value="93">psycholog</option>
      	<option value="162">psycholog dziecięcy</option>
      	<option value="152">psychoterapeuta</option>
      	<option value="82">pulmonolog</option>
      	<option value="173">pulmonolog dziecięcy</option>
      	<option value="83">radiolog</option>
      	<option value="183">radioterapeuta</option>
      	<option value="86">reumatolog</option>
      	<option value="87">seksuolog</option>
      	<option value="102">specjalista medycyny estetycznej</option>
      	<option value="103">stomatolog</option>
      	<option value="124">stomatolog dziecięcy</option>
      	<option value="150">transplantolog</option>
      	<option value="180">ultrasonografista</option>
      	<option value="90">urolog</option>
      	<option value="156">urolog dziecięcy</option>
      	<option value="178">wenerolog</option>
      	<option value="92">weterynarz</option>
    </select>
   </div>
 </div>
<div class="form-group row adres">
  <label for="doctor-address" class="col-3 col-form-label">Pełny adres lekarza</label>
  <div class="col-9">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-home"></i>
        </div>
      </div>
      <input id="doctor-address" name="doctor-address" type="text" class="form-control">
    </div>
  </div>
</div>
<div class="form-group row nip">
  <label for="doctor-nip" class="col-3 col-form-label">NIP</label>
  <div class="col-9">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-home"></i>
        </div>
      </div>
      <input id="doctor-nip" name="doctor-nip" type="text" class="form-control">
    </div>
  </div>
</div>
<div class="form-group row worktype">
  <label for="worktype" class="col-3 col-form-label">Rodzaj współpracy</label>
  <div class="col-9">
    <select id="worktype" name="worktype" class="custom-select">
      <option value="b2b">B2B</option>
      <option value="uz">Umowa zlecenie</option>
    </select>
  </div>
</div>
<div class="form-group row">
  <label for="role" class="col-3 col-form-label">Rola</label>
  <div class="col-9">
    <select id="role" name="role" class="custom-select">
      <option value="administrator">Administrator</option>
      <option value="ksiegowosc">Księgowość</option>
      <option value="pielegniarka">Pielęgniarka</option>
      <option value="pacjent">Pacjent</option>
      <option value="lekarz">Lekarz</option>
    </select>
  </div>
</div>
<div class="form-group row">
  <div class="offset-3 col-9">
    <button name="submit" type="submit" class="btn btn-primary">Dodaj</button>
  </div>
</div>
</form>
