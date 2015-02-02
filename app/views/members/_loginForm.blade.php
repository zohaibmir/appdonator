<div class="row">
    <div class="col">
        
        <div class="list list-inset">
            <label class="item">
            LOGGA IN
        </label>
            
            <label class="item item-input">
              
                <input id="email" type="email" name="email" placeholder="E-post"  value="{{Input::old('email')}}">                
            </label>
            <label class="item item-input">
               
                <input type="password" name="password" value=""  placeholder="Lösenord">
            </label>

            <div class="padding">
                <button class="button button-block button-balanced">Sign In</button>
            </div>
        </div>        
    </div>
</div>
<div class="padding"></div>