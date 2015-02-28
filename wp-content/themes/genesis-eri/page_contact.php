
<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Templates
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */

//* Template Name: Contact Template
get_header();?>

      <!-- Subpage-->
      <div class="subpage">
         <div class="sub_banner body">
            <div class="container">
               <div class="row">
                  <div class="col-md-9">
                     <h3>Contact Us</h3>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                  </div>
                  <div class="col-md-3">
                     <input type="text" placeholder="Search" class="ip-search">
                  </div>
               </div>
            </div>
         </div>
          <!-- BEGIN MAP SECTION -->
        <div class="map-section">
            <div class='content-container  embed-container  maps'>
             <iframe style="pointer-events: none;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3241.449803390351!2d139.71144999999999!3d35.665925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ca02b2529d1%3A0xb365376a9790f59!2z6KGj55CG44Kv44Oq44OL44OD44Kv6KGo5Y-C6YGT!5e0!3m2!1svi!2s!4v1421898572461" width="100%" height="450" frameborder="0" style="border:0"></iframe>
             </div>
        </div>
        <!-- END MAP SECTION -->
         <div class="sub_content" id="contact_dr">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <p>衣理クリニック表参道はメトロ表参道駅から徒歩１分と大変便利な立地となっております。
詳しくは<a href="#">アクセス</a>をご確認のうえ、ご来院ください。</p>
                     <p>どんなお悩みでもお気軽に。まずはお電話にてご相談ください！</p>
                     <p>初診の方：<span class="number-eri">03-5786-1155</span>  </p>
                     <p>再診の方：<span class="number-eri">03-5786-0077</span></p>
                     <p>電話受付時間：<b>10:00〜19:00</b>（水曜・日曜休診）<br>
                        ※休診日は電話代行サービスにて一旦電話をお受けし<br>
                        翌診療日に改めてクリニックスタッフよりご連絡をさせて頂きます。<br>
                        ただし、緊急やお急ぎの場合はすぐにスタッフより折り返しをいたします。<br>
                        ※その他の休診日は診療日カレンダーでご確認ください<br></p>
                     <div class="practice-calendar">
                        <h3>診療日カレンダー</h3>
                        <p>ピンク背景色が休診日となります<br>
                           <span>毎月第二水曜は診療日、第二木曜は休診日となります。</span></p>
                           <div role="tabpanel">
                             <!-- Nav tabs -->
                             <ul class="nav nav-tabs" role="tablist">
                               <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">2014年12月</a></li>
                               <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">2015年1月</a></li>
                               <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">2015年2月</a></li>
                             </ul>

                             <!-- Tab panes -->
                             <div class="tab-content">
                               <div role="tabpanel" class="tab-pane active" id="home">
                                 <iframe src="https://www.google.com/calendar/embed?src=system%40eri-clinic.com&ctz=Asia/Tokyo" style=" border-width:0 " width="250px" height="190" frameborder="0" scrolling="no"></iframe>
                                 <div class="text-calendar">
                                    <p>12月20日（土）<br>
                                       ・24日（水）･28日(日）の<br>
                                       診療時間は9：00～18：00<br>
                                       までとなります。</p>
                                       <p>診療時間　10:00〜19:00<br>
                                          最終受付　18:00〜18:30<br>
                                          ※最終受付時間は施術内容により異なります。</p>
                                 </div>
                               </div>
                               <div role="tabpanel" class="tab-pane" id="profile">...</div>
                               <div role="tabpanel" class="tab-pane" id="messages">...</div>
                             </div>

                           </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class=" col-md-12"><div class="required">
                        下記のフォームよりお問い合わせください。＊は必須項目です。
                     </div></div>
                     <div class="col-wra">
                           <div class="col-md-6">
                                 お名前 <span>*<span>
                                 <input type="text">
                              </div>
                              <div class="col-md-6">
                                 フリガナ
                                 <input type="text">
                              </div>
                              <div class="col-md-6">
                                 メールアドレス <span>*</span>
                                 <input type="text">
                              </div>
                              <div class="col-md-6">
                                 電話番号 <span>*</span>
                                 <input type="text">
                              </div>
                              <div class="col-md-6">
                                 診察券番号<label class="text-small"> ※ご来院歴がある方のみ</label>
                                 <input type="text">
                              </div>
                              <div class="col-md-6">
                                 メールアドレス <span>*</span>
                                 <div class="col-vmm">
                                    <input id="male" type="radio"  name="gender" value="male">
                                    <label for="male">有り</label>
                                    <input id="female" type="radio" checked="checked" name="gender" value="female">
                                    <label for="female">無し</label>
                                 </div>
                              </div>
                              <div class="col-md-12 list-content">
                                 内容 <span>*</span>
                                 <div class="col-vmm">
                                    <input id="ip1" type="radio"  name="ip1" value="male1">
                                    <label for="ip1">診察のご予約</label>
                                    <input id="ip2" type="radio" checked="checked" name="ip1" value="female2">
                                    <label for="ip2">施術内容についてのお問い合わせ</label>
                                    <input id="ip3" type="radio" checked="checked" name="ip1" value="female3">
                                    <label for="ip3">その他のお問い合わせ</label>
                                 </div>
                              </div>
                              <div class="col-md-12 list-content">
                                 詳細 <span>*</span>
                                 <textarea></textarea>
                              </div>
                               <div class="col-md-12 list-content">
                                <button>確認画面へ</button>
                              </div>
                        </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
<?php get_footer(); ?>