@extends('layouts.layout')
@section('content')
<div class="add-page">
    <form action="{{ route('edit') }}" method="post">
        {{ csrf_field() }}
        <div class="add_header_box">
            <div class="add_header">
                <p>Իմ էջը > Ավելացնել հայտարարություն</p>
            </div>
        </div>
        <div class="add_content">
            <div class="add_box">
                <div class="a">
                    <h4>Անվանում</h4>
                </div>
                <div class="a input_box">
                    <input type="text" name="name" value="{{ $item->title }}"
                        placeholder="{{ $errors->first('name') }}" />
                </div>
            </div>
            <div class="add_box">
                <div class="a">
                    <h4>Հասցե</h4>
                </div>
                <div class="a input_box">
                    <input type="text" name="address" value="{{ $item->address }}"
                        placeholder="{{ $errors->first('address') }}" />
                </div>
            </div>
            <div class="add_box">
                <div class="a">
                    <h4>Տեսակ</h4>
                </div>
                <div class="a input_box select">
                    <select name="sel">
                        <option value="{{ $item->type_id }}">{{ $item->type->type}}</option>
                        <option value="1">Հյուրանոց</option>
                        <option value="2">Ռեստորան</option>
                        <option value="3">Մանկապարտեզ</option>
                        <option value="4">Լողավազան</option>
                        <option value="5">Մարզասրահ</option>
                        <option value="6">Բանկ</option>
                        <option value="7">Ակումբ</option>
                        <option value="8">Գեղեցկության սրահ</option>
                        <option value="9">Տաքսի</option>
                        <option value="10">Սրճարան</option>
                        <option value="11">Խանութ</option>
                        <option value="12">Բար</option>
                        <option value="13">Տուրիզմ</option>
                        <option value="14">Կինոթատրոն</option>
                        <option value="15">Դեղատուն</option>
                        <option value="16">Բեռնափոխադրում</option>
                        <span class='e'>{{ $errors->first('sel') }}</span>
                    </select>
                </div>
            </div>
            <div class="add_box">
                <div class="a">
                    <h4>Տարածաշրջան</h4>
                </div>
                <div class="a input_box select">
                    <select name="region" id="">
                        <option value="{{ $item->region_id }}">{{ $item->region->name}}</option>
                        <optgroup label="Երևան">
                            <option value="1">Աջափնյակ</option>
                            <option value="2">Արաբկիր</option>
                            <option value="3">Ավան</option>
                            <option value="4">Դավիթաշեն</option>
                            <option value="5">Էրեբունի</option>
                            <option value="6">Քանաքեռ Զեյթուն</option>
                            <option value="7">Կենտրոն</option>
                            <option value="8">Մալաթիա Սեբաստիա</option>
                            <option value="9">Նոր Նորք</option>
                            <option value="10">Նորք Մարաշ</option>
                            <option value="11">Նուբարաշեն</option>
                            <option value="12">Շենգավիթ</option>
                        </optgroup>
                        <optgroup label="Արագածոտն">
                            <option value="13">Ապարան</option>
                            <option value="14">Արագած</option>
                            <option value="15">Աճուր</option>
                            <option value="16">Աշտարակ</option>
                            <option value="17">Կոշ</option>
                            <option value="18">Թալին</option>
                            <option value="19">Ուջան</option>
                        </optgroup>
                        <optgroup label="Արարատ">
                            <option value="20">Արարատ</option>
                            <option value="21">Արտաշատ</option>
                            <option value="22">Գեղանիստ</option>
                            <option value="23">Մասիս</option>
                            <option value="24">Վեդի</option>
                        </optgroup>
                        <optgroup label="Արմավիր">
                            <option value="25">Արմավիր</option>
                            <option value="26">Էջմիածին</option>
                            <option value="27">Մեծամոր</option>
                        </optgroup>
                        <optgroup label="Արցախ">
                            <option value="28">Ասկերան</option>
                            <option value="29">Հադրութ</option>
                            <option value="30">Քաշաթաղ</option>
                            <option value="31">Լաչին</option>
                            <option value="32">Մարտակերտ</option>
                            <option value="33">Մարտունի</option>
                            <option value="34">Շահումյան</option>
                            <option value="35">Շուշի</option>
                            <option value="36">Ստեփանակերտ</option>
                        </optgroup>
                        <optgroup label="Գեղարքունիք">
                            <option value="37">Ճամբարակ</option>
                            <option value="38">Գավառ</option>
                            <option value="39">Մարտունի</option>
                            <option value="40">Սևան</option>
                            <option value="41">Վարդենիս</option>
                        </optgroup>
                        <optgroup label="Կոտայք">
                            <option value="42">Աբովյան</option>
                            <option value="43">Աղվերան</option>
                            <option value="44">Արգել</option>
                            <option value="45">Առինջ</option>
                            <option value="46">Արզնի</option>
                            <option value="47">Բջնի</option>
                            <option value="48">Բյուեղավան</option>
                            <option value="49">Չարենցավան</option>
                            <option value="50">Ձորաղբյուր</option>
                            <option value="51">Գառնի</option>
                            <option value="52">Հրազդան</option>
                            <option value="53">Ջրվաժ</option>
                            <option value="54">Քանաքեռավան</option>
                            <option value="55">Քասախ</option>
                            <option value="56">Նոր Հաճըն</option>
                            <option value="57">Նուռնուս</option>
                            <option value="58">Պռոշյան</option>
                            <option value="59">Ծաղկաձոր</option>
                            <option value="60">Եղվարդ</option>
                            <option value="61">Զովունի</option>
                        </optgroup>
                        <optgroup label="Լոռի">
                            <option value="62">Ալավերդի</option>
                            <option value="63">Սպիտակ</option>
                            <option value="64">Ստեպանավան</option>
                            <option value="65">Տաշիր</option>
                            <option value="66">Վանաձոր</option>
                        </optgroup>
                        <optgroup label="Շիրակ">
                            <option value="67">Արթիկ</option>
                            <option value="68">Գյումրի</option>
                            <option value="69">Մարալիկ</option>
                        </optgroup>
                        <optgroup label="Սյունիք">
                            <option value="70">Գորիս</option>
                            <option value="71">Քաջարան</option>
                            <option value="72">Կապան</option>
                            <option value="73">Մեղրի</option>
                            <option value="74">Սիսիան</option>
                        </optgroup>
                        <optgroup label="Տավուշ">
                            <option value="75">Բերդ</option>
                            <option value="76">Դիլիջան</option>
                            <option value="77">Իջևան</option>
                            <option value="78">Նոյեմբերյան</option>
                        </optgroup>
                        <optgroup label="Վայոց Ձոր">
                            <option value="79">Ջերմուկ</option>
                            <option value="80">Վայք</option>
                            <option value="81">Եղեգնաձոր</option>
                        </optgroup>
                    </select>
                    <span class='e'>{{ $errors->first('region')}}</span>
                </div>
            </div>
            <div class="add_box">
                <div class="a ">
                    <h4>Նկարագիր</h4>
                </div>
                <div class="a textarea_box input_box">
                    <textarea name="text"
                        placeholder="{{ $errors->first('text') }}">{{ old('text') }}{{ $item->body }}</textarea>
                </div>
            </div>
            <div class="add_box">
                <div class="a">
                    <h4>Logo</h4>
                </div>
                <div class="a  input_box logo_box">
                    <input type="file" id='edit_logo' name='edit_logo'>
                    <label for="edit_logo" class='img_label'>
                        <i class="fas fa-camera"></i>
                    </label>
                    @foreach($item->logo as $l)
                    <div class="img img-logo">
                        <div class="remove_btn" id='{{ $l->id }}'>
                            <i class="fas fa-times"></i>
                        </div>
                        <img src="../storage/{{ $l->path_logo }}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="add_box">
                <div class="a">
                    <h4>Լուսանկարներ</h4>
                </div>
                <div class="a  input_box img_box">
                    <input type="file" id='edit_file' name='edit_file'>
                    <label for="edit_file" class='img_label'>
                        <i class="fas fa-camera"></i>
                    </label>
                    @foreach($item->images as $i)
                    <div class="img">
                        <div class="remove_btn" id='{{ $i->id }}'>
                            <i class="fas fa-times"></i>
                        </div>
                        <img src="../storage/{{ $i->path }}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="add_box">
                <div class="a">
                    <h4>Հեռախոսահամարներ</h4>
                </div>
                <div class="a phone_box">
                    <div class="contact_box">
                        <span class="phone-span"><i class="fas fa-phone"></i></span>
                    </div>
                    <div class="contact_box contact_inp">
                        <input type="text" name="phone1" value="{{ $item->phone1 }}" class='validate' />
                    </div>
                </div>
                <div class="a phone_box">
                    <div class="contact_box ">
                        <span class="phone-span"><i class="fas fa-phone"></i></span>
                    </div>
                    <div class="contact_box contact_inp">
                        <input type="text" name="phone2" value="{{ $item->phone2 }}" class='validate' />
                    </div>
                </div>
            </div>
            <div class="add_box">
                <div class="a">
                    <h4>Youtube URL</h4>
                </div>
                <div class="a phone_box">
                    <div class="contact_box">
                        <span><i class="fab fa-youtube"></i></span>
                    </div>
                    <div class="contact_box contact_inp">
                        @if($item->link1)
                        <input type="url" name="link1" value="https://www.youtube.com/watch?v={{ $item->link1 }}" />
                        @else
                        <input type="url" name="link1" value="" />
                        @endif
                    </div>
                </div>
            </div>
            <div class="add_box">
                <div class="a">
                    <h4>Viber</h4>
                </div>
                <div class="a phone_box">
                    <div class="contact_box">
                        <span class="phone-span icon"><i class="fab fa-viber"></i></span>
                    </div>
                    <div class="contact_box contact_inp">
                        <input type="text" name="viber" class="validate" value="{{ $item->viber }}" />
                    </div>
                </div>
            </div>
            <div class="add_box">
                <div class="a">
                    <h4>Facebook URL</h4>
                </div>
                <div class="a phone_box">
                    <div class="contact_box">
                        <span class="phone-span icon"><i class="fab fa-facebook-f"></i></span>
                    </div>
                    <div class="contact_box contact_inp">
                        <input type="url" name="facebook_url" value="{{ $item->facebook_url }}" />
                    </div>
                </div>
            </div>
            <div class="add_box">
                <div class="a">
                    <h4>Կայք</h4>
                </div>
                <div class="a phone_box">
                    <div class="contact_box">
                        <span class="phone-span icon"><i class="fas fa-globe"></i></span>
                    </div>
                    <div class="contact_box contact_inp">
                        <input type="url" name="site_url" value="{{ $item->site_url }}" />
                    </div>
                </div>
            </div>
            <div class="add_box">
                <button class="add_btn">Հաստատել</button>
            </div>
        </div>
        <input type="hidden" name='id' value='{{ $item->id}}'>
    </form>
</div>
@endsection