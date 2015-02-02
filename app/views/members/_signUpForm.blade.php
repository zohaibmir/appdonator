<div class="row">
    <div class="col">
        <label class="item">
            REGISTRERA KONTO
        </label>
        <div class="list">
            <label class="item item-input">
                <span class="input-label">Username</span>
                <input id="email" type="email" name="email" placeholder="E-post"  value="{{Input::old('email')}}">                
            </label>
            <label class="item item-input">
                <span class="input-label">Password</span>
                <input type="password" name="password" value=""  placeholder="Lösenord">
            </label>


        </div>        
        <div class="list">

            <li class="item item-checkbox">
                <label class="checkbox">
                    <input type="checkbox">
                </label>
                  Visa lösenord
            </li>



        </div>
        <div class="padding">
            <button class="button button-block button-balanced">REGISTRERA</button>
        </div>
    </div>
</div>
<div class="padding"></div>