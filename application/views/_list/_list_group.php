<script>

	function openDialog(arr) {
		document.getElementById("_mail").value = arr[0];
		$("#myModal").modal();

	}
</script>


<!--  <!-- Modal -->-->
<!--  <div class="modal fade" id="myModal" role="dialog">-->
<!--    <div class="modal-dialog">-->
<!--    -->
<!--      <!-- Modal content-->-->
<!--      <div class="modal-content">-->
<!--        <div class="modal-header">-->
<!--          <button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--          <h4 class="modal-title">Modal Header</h4>-->
<!--        </div>-->
<!--        <div class="modal-body">-->
<!--     -->
<!--                                <div class="row-fluid">-->
<!--									<div class="span12 widget">-->
<!--										-->
<!--										<div class="widget-content form-container">-->
<!--											<form id="validate-4" class="validate-4" method="post">-->
<!--												<fieldset>-->
<!--													<legend>Account Info</legend>-->
<!--													<div class="control-group">-->
<!--														<label  class="control-label">Email <span class="required">*</span></label>-->
<!--														<div class="controls">-->
<!--															<input id="_mail" type="text" name="email" class="span12" />-->
<!--														</div>-->
<!--													</div>-->
<!--													<div class="control-group">-->
<!--														<label class="control-label">Password</label>-->
<!--														<div class="controls">-->
<!--															<input id="pass2" type="text" name="pass2" class="span12" />-->
<!--														</div>-->
<!--													</div>-->
<!--													<div class="control-group">-->
<!--														<label class="control-label">Confirm Password <span class="required">*</span></label>-->
<!--														<div class="controls">-->
<!--															<input type="text" name="cpass2" class="span12" />-->
<!--														</div>-->
<!--													</div>-->
<!--												</fieldset>-->
<!--												<fieldset class="da-form-inline">-->
<!--													<legend>Delivery Options</legend>-->
<!--													<div class="control-group">-->
<!--														<label class="control-label">Souvenir Delivery Address</label>-->
<!--														<div class="controls">-->
<!--															<textarea name="address" class="span12"></textarea>-->
<!--															<label class="checkbox">-->
<!--                                                                <input type="checkbox" id="souvenirs" name="souvenirs" class="uniform"> Yes, send me the souvenirs-->
<!--                                                            </label>-->
<!--														</div>-->
<!--													</div>-->
<!--												</fieldset>-->
<!--										-->
<!--													<input type="reset" value="Reset" class="btn" />-->
<!--													<input type="submit" value="Register" class="btn btn-primary pull-right" />-->
<!--											-->
<!--											</form>-->
<!---->
<!--										</div>-->
<!--									-->
<!--									</div>-->
<!--								-->
<!--								</div>-->
<!---->
<!--                                -->
<!--                            -->
<!--        </div>-->
<!--        <div class="modal-footer">-->
<!--          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--        </div>-->
<!--      </div>-->
<!--      -->
<!--    </div>-->
<!--  </div>-->


<div class="row-fluid">

	<div class="span12 widget">
		<div class="widget-header">
			<span class="title">Basic DataTable</span>
		</div>
		<div class="widget-content table-container">
			<table id="example1" class="table " cellspacing="0" width="100%">
				<thead style="font-weight:bold;">
				<tr>
					<td>نام کارمند</td>
					<td>کد کارمند</td>
					<td>حقوق</td>
					<td>محل</td>
					<td>شهر</td>
					<td>شماره</td>
					<td>تاریخ</td>
				</tr>
				</thead>
				<tfoot>
				<tr>
					<td>نام کارمند</td>
					<td>کد کارمند</td>
					<td>حقوق</td>
					<td>محل</td>
					<td>شهر</td>
					<td>شماره</td>
					<td>تاریخ</td>
				</tr>
				</tfoot>

			</table>
		</div>
	</div>


	<div class="row-fluid">
		<div class="span12">
			<div class="widget">
				<div class="widget-header">
					<span class="title">Exportable DataTable</span>
				</div>
				<div class="widget-content table-container">
					<table id="example" class="table table-striped">
						<thead>
						<tr>
							<th>Country</th>
							<th>Death rate per 1,000 people</th>
							<th>Population aged 0-14 (%)</th>
							<th>Population aged 15-64 (%)</th>
							<th>Population aged 65++ (%)</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>Afghanistan</td>
							<td>19.255</td>
							<td>48.10763351</td>
							<td>49.68900481</td>
							<td>2.203361681</td>
						</tr>
						<tr>
							<td>Albania</td>
							<td>6.025</td>
							<td>29.88720825</td>
							<td>62.67491054</td>
							<td>7.437881203</td>
						</tr>
						<tr>
							<td>Algeria</td>
							<td>5.153</td>
							<td>34.22623374</td>
							<td>61.64253829</td>
							<td>4.131227966</td>
						</tr>
						<tr>
							<td>American Samoa</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Andorra</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Angola</td>
							<td>19.354</td>
							<td>47.65403742</td>
							<td>49.8774663</td>
							<td>2.468496284</td>
						</tr>
						<tr>
							<td>Antigua and Barbuda</td>
							<td>6.2</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Arab World</td>
							<td>6.47916091</td>
							<td>38.00278262</td>
							<td>58.09111074</td>
							<td>3.906106638</td>
						</tr>
						<tr>
							<td>Argentina</td>
							<td>7.785</td>
							<td>27.91279203</td>
							<td>62.22567511</td>
							<td>9.861532851</td>
						</tr>
						<tr>
							<td>Armenia</td>
							<td>8.417</td>
							<td>25.860522</td>
							<td>64.145063</td>
							<td>9.994415002</td>
						</tr>
						<tr>
							<td>Aruba</td>
							<td>6.907</td>
							<td>23.23559061</td>
							<td>69.30132601</td>
							<td>7.463083382</td>
						</tr>
						<tr>
							<td>Australia</td>
							<td>6.7</td>
							<td>20.69833724</td>
							<td>66.84001978</td>
							<td>12.46164297</td>
						</tr>
						<tr>
							<td>Austria</td>
							<td>9.5</td>
							<td>16.95866135</td>
							<td>67.58830299</td>
							<td>15.45303566</td>
						</tr>
						<tr>
							<td>Azerbaijan</td>
							<td>5.9</td>
							<td>31.12501808</td>
							<td>63.23234069</td>
							<td>5.642641229</td>
						</tr>
						<tr>
							<td>Bahamas, The</td>
							<td>5.794</td>
							<td>29.28530393</td>
							<td>65.39873879</td>
							<td>5.315957279</td>
						</tr>
						<tr>
							<td>Bahrain</td>
							<td>3.106</td>
							<td>28.09682964</td>
							<td>69.39781539</td>
							<td>2.505354963</td>
						</tr>
						<tr>
							<td>Bangladesh</td>
							<td>7.382</td>
							<td>37.29669843</td>
							<td>58.68281269</td>
							<td>4.020488876</td>
						</tr>
						<tr>
							<td>Barbados</td>
							<td>8.641</td>
							<td>21.8746145</td>
							<td>66.51576944</td>
							<td>11.60961605</td>
						</tr>
						<tr>
							<td>Belarus</td>
							<td>13.5</td>
							<td>18.74601926</td>
							<td>67.80854878</td>
							<td>13.44543196</td>
						</tr>
						<tr>
							<td>Belgium</td>
							<td>10.2</td>
							<td>17.09278708</td>
							<td>65.96208176</td>
							<td>16.94513116</td>
						</tr>
						<tr>
							<td>Belize</td>
							<td>4.31</td>
							<td>41.57046369</td>
							<td>54.52433416</td>
							<td>3.905202146</td>
						</tr>
						<tr>
							<td>Benin</td>
							<td>13.918</td>
							<td>45.58242723</td>
							<td>51.4059477</td>
							<td>3.01162507</td>
						</tr>
						<tr>
							<td>Bermuda</td>
							<td>7.2</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Bhutan</td>
							<td>8.79</td>
							<td>39.90515735</td>
							<td>55.8106438</td>
							<td>4.284198844</td>
						</tr>
						<tr>
							<td>Bolivia</td>
							<td>8.465</td>
							<td>39.69226632</td>
							<td>56.13812179</td>
							<td>4.169611886</td>
						</tr>
						<tr>
							<td>Bosnia and Herzegovina</td>
							<td>7.879</td>
							<td>19.7497738</td>
							<td>69.19309592</td>
							<td>11.05713028</td>
						</tr>
						<tr>
							<td>Botswana</td>
							<td>13.357</td>
							<td>37.94877483</td>
							<td>59.00297225</td>
							<td>3.048252912</td>
						</tr>
						<tr>
							<td>Brazil</td>
							<td>6.407</td>
							<td>29.52402221</td>
							<td>64.92526171</td>
							<td>5.550716078</td>
						</tr>
						<tr>
							<td>Brunei Darussalam</td>
							<td>3.03</td>
							<td>30.32754804</td>
							<td>66.73607799</td>
							<td>2.936373977</td>
						</tr>
						<tr>
							<td>Bulgaria</td>
							<td>14.1</td>
							<td>15.70523589</td>
							<td>67.71811148</td>
							<td>16.57665262</td>
						</tr>
						<tr>
							<td>Burkina Faso</td>
							<td>14.949</td>
							<td>46.52900127</td>
							<td>51.19849403</td>

							<td>2.272504696</td>
						</tr>
						<tr>
							<td>Burundi</td>
							<td>16.991</td>
							<td>46.17301192</td>
							<td>50.89115795</td>
							<td>2.935830133</td>
						</tr>
						<tr>
							<td>Cambodia</td>
							<td>9.629</td>
							<td>41.5807199</td>
							<td>55.3911806</td>
							<td>3.028099497</td>
						</tr>
						<tr>
							<td>Cameroon</td>
							<td>14.996</td>
							<td>42.81816443</td>
							<td>53.66594361</td>
							<td>3.515891965</td>
						</tr>
						<tr>
							<td>Canada</td>
							<td>7.1</td>
							<td>19.09482605</td>
							<td>68.33812752</td>
							<td>12.56704644</td>
						</tr>
						<tr>
							<td>Cape Verde</td>
							<td>6.2</td>
							<td>41.745228</td>
							<td>52.94256217</td>
							<td>5.312209826</td>
						</tr>
						<tr>
							<td>Caribbean (developing only)</td>
							<td>7.611455126</td>
							<td>31.46504063</td>
							<td>61.82325617</td>
							<td>6.711703199</td>
						</tr>
						<tr>
							<td>Caribbean small states</td>
							<td>6.904921123</td>
							<td>31.25935595</td>
							<td>62.15155994</td>
							<td>6.589084116</td>
						</tr>
						<tr>
							<td>Cayman Islands</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Central Africa (developing only)</td>
							<td>18.02577337</td>
							<td>46.36014135</td>
							<td>50.70052962</td>
							<td>2.939329036</td>
						</tr>
						<tr>
							<td>Central African Republic</td>
							<td>19.631</td>
							<td>42.02447748</td>
							<td>54.02772363</td>
							<td>3.947798888</td>
						</tr>
						<tr>
							<td>Central America (developing only)</td>
							<td>4.976330614</td>
							<td>34.94076799</td>
							<td>59.97286482</td>
							<td>5.086367188</td>
						</tr>
						<tr>
							<td>Central Asia (developing only)</td>
							<td>7.296202424</td>
							<td>35.00240276</td>
							<td>59.99908197</td>
							<td>4.998515278</td>
						</tr>
						<tr>
							<td>Chad</td>
							<td>17.62</td>
							<td>45.87994372</td>
							<td>50.97143424</td>
							<td>3.148622039</td>
						</tr>
						<tr>
							<td>Channel Islands</td>
							<td>9.898</td>
							<td>16.7453382</td>
							<td>68.6774926</td>
							<td>14.5771692</td>
						</tr>
						<tr>
							<td>Chile</td>
							<td>5.093</td>
							<td>27.76171187</td>
							<td>64.95075818</td>
							<td>7.287529945</td>
						</tr>
						<tr>
							<td>China</td>
							<td>6.45</td>
							<td>25.48313284</td>
							<td>67.511056</td>
							<td>7.00581116</td>
						</tr>
						<tr>
							<td>Colombia</td>
							<td>5.65</td>
							<td>32.81914677</td>
							<td>62.44829076</td>
							<td>4.732562478</td>
						</tr>
						<tr>
							<td>Comoros</td>
							<td>10.366</td>
							<td>41.30414298</td>
							<td>55.788319</td>
							<td>2.907538015</td>
						</tr>
						<tr>
							<td>Congo, Dem. Rep.</td>
							<td>19.112</td>
							<td>47.96904458</td>
							<td>49.35000665</td>
							<td>2.680948773</td>
						</tr>
						<tr>
							<td>Congo, Rep.</td>
							<td>12.672</td>
							<td>41.53661633</td>
							<td>54.7474578</td>
							<td>3.715925866</td>
						</tr>
						<tr>
							<td>Costa Rica</td>
							<td>3.925</td>
							<td>31.44193428</td>
							<td>63.08194571</td>
							<td>5.476120005</td>
						</tr>
						<tr>
							<td>Cote d'Ivoire</td>
							<td>14.537</td>
							<td>41.8290384</td>
							<td>55.0740267</td>
							<td>3.096934908</td>
						</tr>
						<tr>
							<td>Croatia</td>
							<td>11.2</td>
							<td>17.00739957</td>
							<td>67.39497857</td>
							<td>15.59762186</td>
						</tr>
						<tr>
							<td>Cuba</td>
							<td>7.181</td>
							<td>21.67489335</td>
							<td>68.56551144</td>
							<td>9.759595213</td>
						</tr>
						<tr>
							<td>Curacao</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Cyprus</td>
							<td>6.844</td>
							<td>22.39789504</td>
							<td>67.37602487</td>
							<td>10.2260801</td>
						</tr>
						<tr>
							<td>Czech Republic</td>
							<td>10.6</td>
							<td>16.66932868</td>
							<td>69.6058339</td>
							<td>13.72483742</td>
						</tr>
						<tr>
							<td>Denmark</td>
							<td>10.9</td>
							<td>18.50047411</td>
							<td>66.68525767</td>
							<td>14.81426822</td>
						</tr>
						<tr>
							<td>Djibouti</td>
							<td>11.732</td>
							<td>41.33277772</td>
							<td>55.93963904</td>
							<td>2.727583239</td>
						</tr>
						<tr>
							<td>Dominica</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Dominican Republic</td>
							<td>5.904</td>
							<td>34.83635354</td>
							<td>59.83924286</td>
							<td>5.324403597</td>
						</tr>
						<tr>
							<td>East and Southern Africa (developing only)</td>
							<td>14.12548204</td>
							<td>43.33348276</td>
							<td>53.58060143</td>
							<td>3.085915806</td>
						</tr>
						<tr>
							<td>East Asia & Pacific (all income levels)</td>
							<td>6.635068302</td>

							<td>26.30141335</td>
							<td>66.5691697</td>
							<td>7.129416951</td>
						</tr>
						<tr>
							<td>East Asia & Pacific (developing only)</td>
							<td>6.621392781</td>
							<td>27.36628617</td>
							<td>66.29248686</td>
							<td>6.341226979</td>
						</tr>
						<tr>
							<td>Eastern Asia (developing only)</td>
							<td>6.508083506</td>
							<td>25.51638823</td>
							<td>67.48803858</td>
							<td>6.995573187</td>
						</tr>
						<tr>
							<td>Eastern Europe (developing only)</td>
							<td>14.765987</td>
							<td>18.113796</td>
							<td>68.86840417</td>
							<td>13.01779984</td>
						</tr>
						<tr>
							<td>Ecuador</td>
							<td>5.032</td>
							<td>34.32804459</td>
							<td>60.57074985</td>
							<td>5.101205563</td>
						</tr>
						<tr>
							<td>Egypt, Arab Rep.</td>
							<td>5.916</td>
							<td>36.03854068</td>
							<td>59.55463941</td>
							<td>4.406819914</td>
						</tr>
						<tr>
							<td>El Salvador</td>
							<td>6.477</td>
							<td>38.24724488</td>
							<td>56.11595701</td>
							<td>5.636798111</td>
						</tr>
						<tr>
							<td>Equatorial Guinea</td>
							<td>16.76</td>
							<td>42.55524809</td>
							<td>53.79146009</td>
							<td>3.653291825</td>
						</tr>
						<tr>
							<td>Eritrea</td>
							<td>10.162</td>
							<td>44.87563448</td>
							<td>52.71067321</td>
							<td>2.413692313</td>
						</tr>
						<tr>
							<td>Estonia</td>
							<td>13.4</td>
							<td>18.07712426</td>
							<td>66.76576091</td>
							<td>15.15711483</td>
						</tr>
						<tr>
							<td>Ethiopia</td>
							<td>14.122</td>
							<td>45.93759693</td>
							<td>51.11104585</td>
							<td>2.951357223</td>
						</tr>
						<tr>
							<td>Euro area</td>
							<td>9.587007172</td>
							<td>16.38533203</td>
							<td>67.27720982</td>
							<td>16.33745814</td>
						</tr>
						<tr>
							<td>Europe & Central Asia (all income levels)</td>
							<td>10.73729436</td>
							<td>19.83266806</td>
							<td>66.8549119</td>
							<td>13.31242004</td>
						</tr>
						<tr>
							<td>Europe & Central Asia (developing only)</td>
							<td>11.82970561</td>
							<td>23.01700558</td>
							<td>66.58963315</td>
							<td>10.39336127</td>
						</tr>
						<tr>
							<td>European Union</td>
							<td>9.97686218</td>
							<td>17.13453445</td>
							<td>67.15056918</td>
							<td>15.71489637</td>
						</tr>
						<tr>
							<td>FMoonCakee Islands</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Fiji</td>
							<td>6.076</td>
							<td>35.05995925</td>
							<td>61.50719831</td>
							<td>3.43284244</td>
						</tr>
						<tr>
							<td>Finland</td>
							<td>9.5</td>
							<td>18.16514187</td>
							<td>66.95923547</td>
							<td>14.87562266</td>
						</tr>
						<tr>
							<td>France</td>
							<td>8.9</td>
							<td>18.83380404</td>
							<td>65.10974881</td>
							<td>16.05644715</td>
						</tr>
						<tr>
							<td>French Polynesia</td>
							<td>4.725</td>
							<td>32.97662832</td>
							<td>62.99202989</td>
							<td>4.031341789</td>
						</tr>
						<tr>
							<td>Gabon</td>
							<td>10.377</td>
							<td>40.95658129</td>
							<td>54.27872682</td>
							<td>4.764691882</td>
						</tr>
						<tr>
							<td>Gambia, The</td>
							<td>11.575</td>
							<td>45.64052906</td>
							<td>52.05237286</td>
							<td>2.307098075</td>
						</tr>
						<tr>
							<td>Georgia</td>
							<td>10.043</td>
							<td>21.95195084</td>
							<td>65.58135517</td>
							<td>12.46669399</td>
						</tr>
						<tr>
							<td>Germany</td>
							<td>10.2</td>
							<td>15.68156476</td>
							<td>68.01194627</td>
							<td>16.30648896</td>
						</tr>
						<tr>
							<td>Ghana</td>
							<td>10.134</td>
							<td>41.06576456</td>
							<td>55.58131308</td>
							<td>3.352922362</td>
						</tr>
						<tr>
							<td>Greece</td>
							<td>10.5</td>
							<td>15.19065052</td>
							<td>67.96254224</td>
							<td>16.84680723</td>
						</tr>
						<tr>
							<td>Greenland</td>
							<td>7.508896797</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Grenada</td>
							<td>6.832</td>
							<td>35.04363586</td>
							<td>57.18563464</td>
							<td>7.770729497</td>
						</tr>
						<tr>
							<td>Guam</td>
							<td>4.853</td>
							<td>30.49752815</td>
							<td>64.13659304</td>
							<td>5.365878812</td>
						</tr>
						<tr>
							<td>Guatemala</td>
							<td>6.452</td>
							<td>44.01249041</td>
							<td>51.97766755</td>
							<td>4.00984204</td>
						</tr>
						<tr>
							<td>Guinea</td>
							<td>16.872</td>
							<td>44.2491365</td>
							<td>52.44017427</td>
							<td>3.310689238</td>
						</tr>
						<tr>
							<td>Guinea-Bissau</td>
							<td>19.224</td>
							<td>43.12383378</td>
							<td>53.57436193</td>
							<td>3.301804289</td>
						</tr>
						<tr>
							<td>Guyana</td>
							<td>8.321</td>
							<td>35.51816189</td>
							<td>59.97563774</td>
							<td>4.506200373</td>
						</tr>
						<tr>
							<td>Haiti</td>
							<td>10.303</td>
							<td>40.2735406</td>
							<td>55.8040135</td>
							<td>3.922445896</td>
						</tr>
						<tr>
							<td>Heavily indebted poor countries (HIPC)</td>
							<td>14.9946587</td>
							<td>45.0805564</td>
							<td>51.97020908</td>
							<td>2.949234516</td>
						</tr>
						<tr>
							<td>High income</td>
							<td>8.554084151</td>
							<td>18.970739</td>
							<td>67.06673577</td>
							<td>13.96252522</td>
						</tr>
						<tr>
							<td>High income: nonOECD</td>
							<td>5.379267452</td>
							<td>28.99267436</td>
							<td>64.59456093</td>
							<td>6.412764711</td>
						</tr>
						<tr>
							<td>High income: OECD</td>
							<td>8.799186288</td>
							<td>18.42686397</td>
							<td>67.20089691</td>
							<td>14.37223913</td>
						</tr>
						<tr>
							<td>Honduras</td>
							<td>5.327</td>
							<td>42.35540436</td>
							<td>53.75837608</td>
							<td>3.886219553</td>
						</tr>
						<tr>
							<td>Hong Kong SAR, China</td>
							<td>5.1</td>
							<td>17.19962372</td>
							<td>71.78837433</td>
							<td>11.01200195</td>
						</tr>
						<tr>
							<td>Hungary</td>
							<td>13.3</td>
							<td>16.80555739</td>
							<td>68.11935112</td>
							<td>15.07509149</td>
						</tr>
						<tr>
							<td>Iceland</td>
							<td>6.8</td>
							<td>23.28224459</td>
							<td>65.14242026</td>
							<td>11.57533516</td>
						</tr>
						<tr>
							<td>India</td>
							<td>9.005</td>
							<td>34.70783054</td>
							<td>61.06205588</td>
							<td>4.230113585</td>
						</tr>
						<tr>
							<td>Indonesia</td>
							<td>7.435</td>
							<td>30.73198092</td>
							<td>64.65260727</td>
							<td>4.615411809</td>
						</tr>
						<tr>
							<td>Iran, Islamic Rep.</td>
							<td>5.286</td>
							<td>34.98611061</td>
							<td>60.54797351</td>
							<td>4.465915879</td>
						</tr>
						<tr>
							<td>Iraq</td>
							<td>5.425</td>
							<td>43.46260193</td>
							<td>52.76709279</td>
							<td>3.770305286</td>
						</tr>
						<tr>
							<td>Ireland</td>
							<td>8.2</td>
							<td>21.77342012</td>
							<td>67.0086861</td>
							<td>11.21789378</td>
						</tr>
						<tr>
							<td>Isle of Man</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Israel</td>
							<td>6</td>
							<td>28.08404322</td>
							<td>61.87815599</td>
							<td>10.03780079</td>
						</tr>
						<tr>
							<td>Italy</td>
							<td>9.7</td>
							<td>14.32288611</td>
							<td>67.41712385</td>
							<td>18.25999004</td>
						</tr>
						<tr>
							<td>Jamaica</td>
							<td>6.3</td>
							<td>32.65569125</td>
							<td>59.88635941</td>
							<td>7.457949341</td>
						</tr>
						<tr>
							<td>Japan</td>
							<td>7.7</td>
							<td>14.62417807</td>
							<td>68.19362599</td>
							<td>17.18219594</td>
						</tr>
						<tr>
							<td>Jordan</td>
							<td>4.306</td>
							<td>39.79436083</td>
							<td>56.8845948</td>
							<td>3.321044371</td>
						</tr>
						<tr>
							<td>Kazakhstan</td>
							<td>10.1</td>
							<td>27.64389644</td>
							<td>65.5364949</td>
							<td>6.819608665</td>
						</tr>
						<tr>
							<td>Kenya</td>
							<td>12.511</td>
							<td>44.28852122</td>
							<td>52.9088443</td>
							<td>2.802634478</td>
						</tr>
						<tr>
							<td>Kiribati</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Korea, Dem. Rep.</td>
							<td>9.601</td>
							<td>26.32501088</td>
							<td>66.90251788</td>
							<td>6.772471242</td>
						</tr>
						<tr>
							<td>Korea, Rep.</td>
							<td>5.2</td>
							<td>20.96041752</td>
							<td>71.70244542</td>

							<td>7.337137052</td>
						</tr>
						<tr>
							<td>Kosovo</td>
							<td>7.03</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Kuwait</td>
							<td>3.064</td>
							<td>26.6066944</td>
							<td>70.28415292</td>
							<td>3.109152684</td>
						</tr>
						<tr>
							<td>Kyrgyz Republic</td>
							<td>7</td>
							<td>34.98037277</td>
							<td>59.55084412</td>
							<td>5.468783111</td>
						</tr>
						<tr>
							<td>Lao PDR</td>
							<td>8.579</td>
							<td>42.2881442</td>
							<td>54.04633388</td>
							<td>3.665521924</td>
						</tr>
						<tr>
							<td>Latin America & Caribbean (all income levels)</td>
							<td>6.035894357</td>
							<td>31.843385</td>
							<td>62.39215557</td>
							<td>5.764459431</td>
						</tr>
						<tr>
							<td>Latin America & Caribbean (developing only)</td>
							<td>6.019972566</td>
							<td>31.9273969</td>
							<td>62.35272854</td>
							<td>5.719874553</td>
						</tr>
						<tr>
							<td>Latvia</td>
							<td>13.6</td>
							<td>17.72859388</td>
							<td>66.69067813</td>
							<td>15.58072799</td>
						</tr>
						<tr>
							<td>Least developed countries: UN classification</td>
							<td>13.04395118</td>
							<td>42.86425322</td>
							<td>53.89110205</td>
							<td>3.244644726</td>
						</tr>
						<tr>
							<td>Lebanon</td>
							<td>7.028</td>
							<td>30.49282947</td>
							<td>62.73833754</td>
							<td>6.768832991</td>
						</tr>
						<tr>
							<td>Lesotho</td>
							<td>16.023</td>
							<td>41.22455672</td>
							<td>54.31661234</td>
							<td>4.458830946</td>
						</tr>
						<tr>
							<td>Liberia</td>
							<td>17.723</td>
							<td>43.59320617</td>
							<td>53.8033358</td>
							<td>2.603458025</td>
						</tr>
						<tr>
							<td>Libya</td>
							<td>3.961</td>
							<td>32.35923994</td>
							<td>64.24694271</td>
							<td>3.393817352</td>
						</tr>
						<tr>
							<td>Liechtenstein</td>
							<td>7.3</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Lithuania</td>
							<td>11.1</td>
							<td>19.96644027</td>
							<td>66.15149936</td>
							<td>13.88206037</td>
						</tr>
						<tr>
							<td>Low & middle income</td>
							<td>8.71172057</td>
							<td>32.51964432</td>
							<td>62.03255048</td>
							<td>5.447805196</td>
						</tr>
						<tr>
							<td>Low income</td>
							<td>12.87702101</td>
							<td>41.95202217</td>
							<td>54.63449771</td>
							<td>3.413480117</td>
						</tr>
						<tr>
							<td>Lower middle income</td>
							<td>9.09156979</td>
							<td>35.6557951</td>
							<td>59.92624521</td>
							<td>4.417959687</td>
						</tr>
						<tr>
							<td>Luxembourg</td>
							<td>8.6</td>
							<td>18.95607487</td>
							<td>67.0826722</td>
							<td>13.96125293</td>
						</tr>
						<tr>
							<td>Macao SAR, China</td>
							<td>4.5</td>
							<td>22.83689191</td>
							<td>69.80505572</td>
							<td>7.358052363</td>
						</tr>
						<tr>
							<td>Macedonia, FYR</td>
							<td>8.435</td>
							<td>22.28201709</td>
							<td>67.68195169</td>
							<td>10.03603122</td>
						</tr>
						<tr>
							<td>Madagascar</td>
							<td>9.877</td>
							<td>45.26255458</td>
							<td>51.5990865</td>
							<td>3.138358915</td>
						</tr>
						<tr>
							<td>Malawi</td>
							<td>17.44</td>
							<td>45.81738173</td>
							<td>51.12870028</td>
							<td>3.053917994</td>
						</tr>
						<tr>
							<td>Malaysia</td>
							<td>4.642</td>
							<td>33.32464371</td>
							<td>62.85680632</td>
							<td>3.818549967</td>
						</tr>
						<tr>
							<td>Maldives</td>
							<td>4.642</td>
							<td>40.38926057</td>
							<td>55.80853182</td>
							<td>3.802207615</td>
						</tr>
						<tr>
							<td>Mali</td>
							<td>17.901</td>
							<td>47.16052412</td>
							<td>50.30056685</td>
							<td>2.538909021</td>
						</tr>
						<tr>
							<td>Malta</td>
							<td>7.6</td>
							<td>20.43077852</td>
							<td>68.21750289</td>
							<td>11.35171858</td>
						</tr>
						<tr>
							<td>Marshall Islands</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Mauritania</td>
							<td>10.455</td>
							<td>42.68685983</td>
							<td>54.63879764</td>
							<td>2.67434253</td>
						</tr>
						<tr>
							<td>Mauritius</td>
							<td>6.7</td>
							<td>26.71979813</td>
							<td>67.59011293</td>
							<td>5.690088936</td>
						</tr>
						<tr>
							<td>Mexico</td>
							<td>4.728</td>
							<td>33.17512974</td>
							<td>61.52983975</td>
							<td>5.29503051</td>
						</tr>
						<tr>
							<td>Micronesia, Fed. Sts.</td>
							<td>6.318</td>
							<td>40.14173272</td>
							<td>56.12261094</td>
							<td>3.735656331</td>
						</tr>
						<tr>
							<td>Middle East & North Africa (all income levels)</td>
							<td>5.523116146</td>
							<td>36.58287032</td>
							<td>59.16660838</td>
							<td>4.250521295</td>
						</tr>
						<tr>
							<td>Middle East & North Africa (developing only)</td>
							<td>5.685565083</td>
							<td>36.87950779</td>
							<td>58.88023101</td>
							<td>4.240261204</td>
						</tr>
						<tr>
							<td>Middle East (developing only)</td>
							<td>5.671697164</td>
							<td>39.26021492</td>
							<td>56.77305537</td>
							<td>3.966729703</td>
						</tr>
						<tr>
							<td>Middle income</td>
							<td>8.10196167</td>
							<td>31.13824967</td>
							<td>63.11601328</td>
							<td>5.745737046</td>
						</tr>
						<tr>
							<td>Moldova</td>
							<td>12.081</td>
							<td>23.71791126</td>
							<td>66.307525</td>
							<td>9.974563741</td>
						</tr>
						<tr>
							<td>Monaco</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Mongolia</td>
							<td>7.557</td>
							<td>35.25238153</td>
							<td>60.99468808</td>
							<td>3.752930389</td>
						</tr>
						<tr>
							<td>Montenegro</td>
							<td>7.622</td>
							<td>21.76030578</td>
							<td>67.98417973</td>
							<td>10.25551449</td>
						</tr>
						<tr>
							<td>Morocco</td>
							<td>6.116</td>
							<td>33.55897545</td>
							<td>61.74214666</td>
							<td>4.698877889</td>
						</tr>
						<tr>
							<td>Mozambique</td>
							<td>17.104</td>
							<td>43.854238</td>
							<td>52.96790951</td>
							<td>3.177852491</td>
						</tr>
						<tr>
							<td>Myanmar</td>
							<td>9.053</td>
							<td>30.64666177</td>
							<td>64.44023999</td>
							<td>4.913098235</td>
						</tr>
						<tr>
							<td>Namibia</td>
							<td>10.101</td>
							<td>40.31798059</td>
							<td>56.32113275</td>
							<td>3.360886658</td>
						</tr>
						<tr>
							<td>Nepal</td>
							<td>8.714</td>
							<td>41.05823028</td>
							<td>55.40057899</td>
							<td>3.541190739</td>
						</tr>
						<tr>
							<td>Netherlands</td>
							<td>8.8</td>
							<td>18.56887408</td>
							<td>67.86922884</td>
							<td>13.56189708</td>
						</tr>
						<tr>
							<td>New Caledonia</td>
							<td>5.1</td>
							<td>28.88495742</td>
							<td>65.23246762</td>
							<td>5.882574953</td>
						</tr>
						<tr>
							<td>New Zealand</td>
							<td>6.91</td>
							<td>22.72873838</td>
							<td>65.50627366</td>
							<td>11.76498795</td>
						</tr>
						<tr>
							<td>Nicaragua</td>
							<td>5.235</td>
							<td>40.85472862</td>
							<td>55.44588332</td>
							<td>3.69938806</td>
						</tr>
						<tr>
							<td>Niger</td>
							<td>17.689</td>
							<td>48.48037811</td>
							<td>49.42450946</td>
							<td>2.09511243</td>
						</tr>
						<tr>
							<td>Nigeria</td>
							<td>17.814</td>
							<td>43.13344609</td>
							<td>53.64352522</td>
							<td>3.223028689</td>
						</tr>
						<tr>
							<td>North Africa</td>
							<td>5.698833701</td>
							<td>34.60168264</td>
							<td>60.89634529</td>
							<td>4.501972071</td>
						</tr>
						<tr>
							<td>North America</td>
							<td>8.54241028</td>
							<td>21.14934034</td>
							<td>66.4520085</td>
							<td>12.39865117</td>
						</tr>
						<tr>
							<td>Northern Mariana Islands</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Norway</td>
							<td>9.8</td>
							<td>20.00888917</td>
							<td>64.83118263</td>
							<td>15.1599282</td>
						</tr>
						<tr>
							<td>OECD members</td>
							<td>8.242995028</td>
							<td>20.50961143</td>
							<td>66.50911694</td>
							<td>12.98127163</td>
						</tr>
						<tr>
							<td>Oman</td>
							<td>3.178</td>
							<td>36.71882281</td>
							<td>60.79226628</td>
							<td>2.488910913</td>
						</tr>
						<tr>
							<td>Other small states</td>
							<td>12.01575718</td>
							<td>39.57111371</td>
							<td>56.44159026</td>
							<td>3.987296037</td>
						</tr>
						<tr>
							<td>Pacific (developing only)</td>
							<td>8.475222409</td>
							<td>39.75719847</td>
							<td>57.48687366</td>
							<td>2.755927873</td>
						</tr>
						<tr>
							<td>Pacific island small states</td>
							<td>8.001616643</td>
							<td>41.77712823</td>
							<td>55.06526058</td>
							<td>3.157611188</td>
						</tr>
						<tr>
							<td>Pakistan</td>
							<td>8.372</td>
							<td>41.36912067</td>
							<td>54.70513622</td>
							<td>3.925743114</td>
						</tr>
						<tr>
							<td>Palau</td>
							<td>6.5</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Panama</td>
							<td>5.017</td>
							<td>31.84772909</td>
							<td>62.64753262</td>
							<td>5.504738296</td>
						</tr>
						<tr>
							<td>Papua New Guinea</td>
							<td>9.149</td>
							<td>40.24753366</td>
							<td>57.25563804</td>
							<td>2.496828303</td>
						</tr>
						<tr>
							<td>Paraguay</td>
							<td>5.766</td>
							<td>38.16146939</td>
							<td>57.47458753</td>
							<td>4.363943072</td>
						</tr>
						<tr>
							<td>Peru</td>
							<td>5.834</td>
							<td>34.00759194</td>
							<td>61.06260924</td>
							<td>4.929798819</td>
						</tr>
						<tr>
							<td>Philippines</td>
							<td>6.044</td>
							<td>38.50868125</td>
							<td>58.30615626</td>
							<td>3.185162482</td>
						</tr>
						<tr>
							<td>Poland</td>
							<td>9.5</td>
							<td>19.3767087</td>
							<td>68.35387058</td>
							<td>12.26942072</td>
						</tr>
						<tr>
							<td>Portugal</td>
							<td>10.5</td>
							<td>16.17539854</td>
							<td>67.64428815</td>
							<td>16.1803133</td>
						</tr>
						<tr>
							<td>Puerto Rico</td>
							<td>7.48</td>
							<td>23.6857994</td>
							<td>65.07093077</td>
							<td>11.24326983</td>
						</tr>
						<tr>
							<td>Qatar</td>
							<td>2.021</td>
							<td>26.08514664</td>
							<td>72.25517254</td>
							<td>1.659680823</td>
						</tr>
						<tr>
							<td>Romania</td>
							<td>11.4</td>
							<td>18.41035671</td>
							<td>68.14793182</td>
							<td>13.44171147</td>
						</tr>
						<tr>
							<td>Russian Federation</td>
							<td>15.4</td>
							<td>18.18786563</td>
							<td>69.40503838</td>
							<td>12.40709599</td>
						</tr>
						<tr>
							<td>Rwanda</td>
							<td>15.8</td>
							<td>45.40802416</td>
							<td>51.97766358</td>
							<td>2.614312259</td>
						</tr>
						<tr>
							<td>Samoa</td>
							<td>5.936</td>
							<td>40.54738345</td>
							<td>55.07139661</td>
							<td>4.381219945</td>
						</tr>
						<tr>
							<td>San Marino</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Sao Tome and Principe</td>
							<td>9.019</td>
							<td>42.57783136</td>
							<td>53.09268846</td>
							<td>4.329480179</td>
						</tr>
						<tr>
							<td>Saudi Arabia</td>
							<td>4.315</td>
							<td>38.64372833</td>
							<td>57.98482396</td>
							<td>3.371447717</td>
						</tr>
						<tr>
							<td>Senegal</td>
							<td>11.101</td>
							<td>45.39837629</td>
							<td>52.06745059</td>
							<td>2.534173124</td>
						</tr>
						<tr>
							<td>Serbia</td>
							<td>13.8</td>
							<td>19.91524993</td>
							<td>66.44836894</td>
							<td>13.63638113</td>
						</tr>
						<tr>
							<td>Seychelles</td>
							<td>6.8</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Sierra Leone</td>
							<td>23.092</td>
							<td>42.40321594</td>
							<td>55.50109036</td>
							<td>2.095693699</td>
						</tr>
						<tr>
							<td>Singapore</td>
							<td>3.9</td>
							<td>21.45707142</td>
							<td>71.18010869</td>
							<td>7.362819891</td>
						</tr>
						<tr>
							<td>Sint Maarten (Dutch part)</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Slovak Republic</td>
							<td>9.8</td>
							<td>20.12842181</td>
							<td>68.78828163</td>
							<td>11.08329656</td>
						</tr>
						<tr>
							<td>Slovenia</td>
							<td>9.3</td>
							<td>15.90319562</td>
							<td>70.07629674</td>
							<td>14.02050764</td>
						</tr>
						<tr>
							<td>Small states</td>
							<td>10.26246903</td>
							<td>37.66981493</td>
							<td>57.76269858</td>
							<td>4.567486487</td>
						</tr>
						<tr>
							<td>Solomon Islands</td>
							<td>7.671</td>
							<td>41.7496061</td>
							<td>55.37295832</td>
							<td>2.877435581</td>
						</tr>
						<tr>
							<td>Somalia</td>
							<td>16.936</td>
							<td>44.14448483</td>
							<td>53.09746557</td>
							<td>2.758049599</td>
						</tr>
						<tr>
							<td>South Africa</td>
							<td>12.238</td>
							<td>33.67810774</td>
							<td>62.63881361</td>
							<td>3.683078651</td>
						</tr>
						<tr>
							<td>South America (developing only)</td>
							<td>6.283612935</td>
							<td>30.79262324</td>
							<td>63.32957534</td>
							<td>5.877801415</td>
						</tr>
						<tr>
							<td>South Asia</td>
							<td>8.947945938</td>
							<td>35.88576795</td>
							<td>59.95470097</td>
							<td>4.159531073</td>
						</tr>
						<tr>
							<td>South Asia, excluding India</td>
							<td>8.773361136</td>
							<td>39.49024347</td>
							<td>56.56620717</td>
							<td>3.943549364</td>
						</tr>
						<tr>
							<td>South Sudan</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>South-Eastern Asia (developing only)</td>
							<td>6.877183559</td>
							<td>31.79052988</td>
							<td>63.44421173</td>
							<td>4.765258382</td>
						</tr>
						<tr>
							<td>Southern Europe (developing only)</td>
							<td>7.009890069</td>
							<td>28.67599776</td>
							<td>64.54473176</td>
							<td>6.779270474</td>
						</tr>
						<tr>
							<td>Spain</td>
							<td>9</td>
							<td>14.7746661</td>
							<td>68.35183586</td>
							<td>16.87349803</td>
						</tr>
						<tr>
							<td>Sri Lanka</td>
							<td>7.144</td>
							<td>26.42125797</td>
							<td>67.1525345</td>
							<td>6.426207533</td>
						</tr>
						<tr>
							<td>St. Kitts and Nevis</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>St. Lucia</td>
							<td>6</td>
							<td>32.41719072</td>
							<td>60.06950633</td>
							<td>7.513302951</td>
						</tr>
						<tr>
							<td>St. Martin (French part)</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>St. Vincent and the Grenadines</td>
							<td>7.768</td>
							<td>31.45582115</td>
							<td>61.60847522</td>
							<td>6.935703627</td>
						</tr>
						<tr>
							<td>Sub-Saharan Africa (all income levels)</td>
							<td>15.44723567</td>
							<td>43.8990927</td>
							<td>53.05797214</td>
							<td>3.042935157</td>
						</tr>
						<tr>
							<td>Sub-Saharan Africa (developing only)</td>
							<td>15.44619988</td>
							<td>43.90015316</td>
							<td>53.05739333</td>
							<td>3.042453514</td>
						</tr>
						<tr>
							<td>Sudan</td>
							<td>11.133</td>
							<td>42.28437929</td>
							<td>54.43988105</td>
							<td>3.275739667</td>
						</tr>
						<tr>
							<td>Suriname</td>
							<td>7.531</td>
							<td>30.61030832</td>
							<td>63.67024672</td>
							<td>5.719444956</td>
						</tr>
						<tr>
							<td>Swaziland</td>
							<td>14.051</td>
							<td>44.62781717</td>
							<td>52.42162296</td>
							<td>2.950559863</td>
						</tr>
						<tr>
							<td>Sweden</td>
							<td>10.5</td>
							<td>18.42697299</td>
							<td>64.37349332</td>
							<td>17.19953369</td>
						</tr>
						<tr>
							<td>Switzerland</td>
							<td>8.7</td>
							<td>17.42419127</td>
							<td>67.26106139</td>
							<td>15.31474734</td>
						</tr>
						<tr>
							<td>Syrian Arab Republic</td>
							<td>3.685</td>
							<td>40.05940132</td>
							<td>56.27096268</td>
							<td>3.669636003</td>
						</tr>
						<tr>
							<td>Tajikistan</td>
							<td>7.662</td>
							<td>42.36020987</td>
							<td>54.08973584</td>
							<td>3.550054295</td>
						</tr>
						<tr>
							<td>Tanzania</td>
							<td>14.26</td>
							<td>44.7420764</td>
							<td>52.35420915</td>
							<td>2.903714452</td>
						</tr>
						<tr>
							<td>Thailand</td>
							<td>6.328</td>
							<td>23.98558791</td>
							<td>69.12265688</td>
							<td>6.891755208</td>
						</tr>
						<tr>
							<td>Timor-Leste</td>
							<td>11.337</td>
							<td>49.30314701</td>
							<td>48.35336934</td>
							<td>2.343483651</td>
						</tr>
						<tr>
							<td>Togo</td>
							<td>11.959</td>
							<td>43.21160471</td>
							<td>53.64194961</td>
							<td>3.14644569</td>
						</tr>
						<tr>
							<td>Tonga</td>
							<td>6.261</td>
							<td>38.35809465</td>
							<td>55.911574</td>
							<td>5.730331342</td>
						</tr>
						<tr>
							<td>Trinidad and Tobago</td>
							<td>7.571</td>
							<td>26.22985965</td>
							<td>67.88696792</td>
							<td>5.883172427</td>
						</tr>
						<tr>
							<td>Tunisia</td>
							<td>5.6</td>
							<td>30.00255813</td>
							<td>63.62538661</td>
							<td>6.372055253</td>
						</tr>
						<tr>
							<td>Turkey</td>
							<td>6.015</td>
							<td>30.73450276</td>
							<td>64.12037701</td>
							<td>5.145120231</td>
						</tr>
						<tr>
							<td>Turkmenistan</td>
							<td>7.678</td>
							<td>36.30395215</td>
							<td>59.39933608</td>
							<td>4.29671177</td>
						</tr>
						<tr>
							<td>Turks and Caicos Islands</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Tuvalu</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Uganda</td>
							<td>17.208</td>
							<td>48.73776283</td>
							<td>48.55053376</td>
							<td>2.711703407</td>
						</tr>
						<tr>
							<td>Ukraine</td>
							<td>15.3</td>
							<td>17.50159822</td>
							<td>68.49538466</td>
							<td>14.00301711</td>
						</tr>
						<tr>
							<td>United Arab Emirates</td>
							<td>1.915</td>
							<td>25.59895513</td>
							<td>73.37724094</td>
							<td>1.023803928</td>
						</tr>
						<tr>
							<td>United Kingdom</td>
							<td>10.2</td>
							<td>19.0191931</td>
							<td>65.1705961</td>
							<td>15.81021079</td>
						</tr>
						<tr>
							<td>United States</td>
							<td>8.7</td>
							<td>21.37338431</td>
							<td>66.24632796</td>
							<td>12.38028773</td>
						</tr>
						<tr>
							<td>Upper middle income</td>
							<td>7.186000766</td>
							<td>26.95992774</td>
							<td>66.06626096</td>
							<td>6.973811307</td>
						</tr>
						<tr>
							<td>Uruguay</td>
							<td>9.2</td>
							<td>24.54636334</td>
							<td>62.41141333</td>
							<td>13.04222332</td>
						</tr>
						<tr>
							<td>Uzbekistan</td>
							<td>5.500840676</td>
							<td>37.36958646</td>
							<td>58.33403093</td>
							<td>4.296382612</td>
						</tr>
						<tr>
							<td>Vanuatu</td>
							<td>6.239</td>
							<td>41.47205982</td>
							<td>55.17036429</td>
							<td>3.357575889</td>
						</tr>
						<tr>
							<td>Venezuela, RB</td>
							<td>4.91</td>
							<td>33.71002761</td>
							<td>61.74710567</td>
							<td>4.542866723</td>
						</tr>
						<tr>
							<td>Vietnam</td>
							<td>5.429</td>
							<td>32.08324588</td>
							<td>62.31632186</td>
							<td>5.600432261</td>
						</tr>
						<tr>
							<td>Virgin Islands (U.S.)</td>
							<td>6</td>
							<td>25.91903125</td>
							<td>65.51040908</td>
							<td>8.570559667</td>
						</tr>
						<tr>
							<td>West Africa (developing only)</td>
							<td>16.23784169</td>
							<td>43.69042393</td>
							<td>53.28575799</td>
							<td>3.023818077</td>
						</tr>
						<tr>
							<td>West Bank and Gaza</td>
							<td>4.5</td>
							<td>47.37353684</td>
							<td>50.33436922</td>
							<td>2.292093942</td>
						</tr>
						<tr>
							<td>Yemen, Rep.</td>
							<td>5.1</td>
							<td>17.19962372</td>
							<td>71.78837433</td>
							<td>11.01200195</td>
						</tr>
						<tr>
							<td>Zambia</td>
							<td>13.3</td>
							<td>16.80555739</td>
							<td>68.11935112</td>
							<td>15.07509149</td>
						</tr>
						<tr>
							<td>Zimbabwe</td>
							<td>6.8</td>
							<td>23.28224459</td>
							<td>65.14242026</td>
							<td>11.57533516</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>

		</div>
	</div>


</div>


<style>
	.modal-header, h3, .close {
		background-color: #0c555c;
		color: black !important;
		text-align: center;
		font-size: 30px;
	}

	.modal-footer {
		background-color: #f9f9f9;
	}
</style>
</head>


<script>
	function tbl_load(_url) {

		$(document).ready(function () {


			$('#example').DataTable({
				"sDom": "<'dt_header'<'row-fluid'<'span6'l><'span6'T>>r>t<'dt_footer'<'row-fluid'<'span6'i><'span6'p>>>",
				"oTableTools": {
					"sSwfPath": "plugins/datatables/TableTools/swf/copy_csv_xls_pdf.swf",
					"aButtons": [
						{
							"sExtends": "copy",
							"sButtonText": '<i class="icol-clipboard-text"></i> Copy'
						},
						{
							"sExtends": "csv",
							"sButtonText": '<i class="icol-doc-excel-csv"></i> CSV'
						},
						{
							"sExtends": "xls",
							"sButtonText": '<i class="icol-doc-excel-table"></i> Excel'
						},
						{
							"sExtends": "pdf",
							"sButtonText": '<i class="icol-doc-pdf"></i> PDF'
						},
						{
							"sExtends": "print",
							"sButtonText": '<i class="icol-printer"></i> Print'
						}
					]
				},

//				"language": {
//
//					"sEmptyTable": "داده ای برای نمایش وجود ندارد",
//					"sInfo": "_START_ تا _END_ از _TOTAL_ رکورد",
//					"sInfoEmpty": "0 تعداد 0 از 0 رکورد",
//					"sInfoFiltered": "(gefiltert von _MAX_ EintrÃ¤gen)",
//					"sInfoPostFix": "",
//					"sInfoThousands": ".",
//					"sLengthMenu": "_MENU_ رکورد",
//					"sLoadingRecords": "در حال دریافت اطلاعات...",
//					"sProcessing": "لطفا منتظر باشید...",
//					"sSearch": "جســتجو: ",
//					"sZeroRecords": "داده ای برای نمایش وجود ندارد",
//					"oPaginate": {
//						"sFirst": "ابتدا",
//						"sPrevious": "قبلی",
//						"sNext": "بعدی",
//						"sLast": "انتها"
//					},
//					"oAria": {
//						"sSortAscending": ": مرتب سازس صعودی",
//						"sSortDescending": ": مرتب سازی نزولی"
//					}
//				},
////				"pagingType": "full_numbers",
//				select: true,
//				"createdRow": function (row, data, index) {
//					if (data[1].replace(/[\$,]/g, '') * 1 > 150000) {
//						$('td', row).css("color", "red");
//						/*$('td', row).eq(1).css("color","red");*/
//					}
//				},
//				dom: '<"top"fB>rt<"bottom"ilp><"clear">',
//				buttons: [
//					{
//						extend: 'collection',
//						text: 'Table control',
//
//						buttons: [
//							'copy', 'csv', 'pdf',
//							{
//								extend: 'print',
//								text: 'Print all'
//							},
//							{
//								extend: 'print',
//								text: 'Print selected',
//								exportOptions: {
//									modifier: {
//										selected: true
//									}
//								}
//							},
//							{
//								extend: 'excel',
//								text: 'Exle selected',
//								exportOptions: {
//									modifier: {
//										selected: true
//									}
//								}
//							}
//						]
//					}, {
//						text: 'My button',
//						action: function (e, dt, node, config) {
//
//							var ids = $.map(table.rows('.selected').data(), function (item) {
//								return item[0]
//							});
//							alert(ids)
//							const args = [ids, 'p1', 'p2'];
//							openDialog(args);
//							/*alert(table.rows('.selected').data().length + ' row(s) selected');
//
//                                            alert(table.row('.selected').item[1]);
//                                       */
//						}
//					}
//				],
//				columns: _cluns,
////				"processing": true,
////				"serverSide": true,
//				"ajax": _url,
			});
			var table = $('#example').DataTable();
		});
	}

</script>
<script>

	$(document).ready(function () {
		tbl_load("_list/_list_controller/load_tbl/")
	});

</script>


<script>

	//--DAscript------------------------------------------------------------------
	;(function ($, window, document, undefined) {
		window.DAtitle = 'مدیریت نوبت';
		window.DAdescription = 'مدیریت درخواستهای رسیده برای نوبت دهی';


	})(jQuery, window, document);

</script>
