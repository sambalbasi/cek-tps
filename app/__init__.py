
from flask import Flask,render_template,request
import requests
import json



app = Flask(__name__)
@app.route('/')
def root():
	return render_template('index.php')

@app.route('/index', methods=['POST'])
def index():
	return render_template('index.php')


@app.route('/cari', methods=['POST'])
def cari():
	nama = request.form['nama']
	nik = request.form['nik']	

	payload = {'nama': nama, 'nik': nik}
	url = 'https://lindungihakpilihmu.kpu.go.id/index.php/dpt/proses_ceknik'
	res = requests.post(url, data=payload, verify=False)
	value = res.json()


	if value['message'] == 'success' :
		print ('success')
		html = """<h2 style="text-align:center">TPS</h2>
		<p style="text-align:center;font-size:50px;"> """+value['data']['tps']+"""</p>
		<p style="margin-top:30px">*Informasi Detail</p>
		<h5>Nama Lengkap</h5>
		<p> """+value['data']['nama'].title()+"""</p>
		<h5>Nama Kota</h5>
		<p> """+value['data']['namaKabKota'].title()+"""</p>
		<h5>Nama Kecamatan</h5>
		<p> """+value['data']['namaKecamatan'].title()+"""</p>
		<h5>Nama Kelurahan</h5>
		<p> """+value['data']['namaKelurahan'].title()+"""</p>
		<h5>NIK</h5>
		<p> """+value['data']['nik']+"""</p>
		<h5>Tempat Lahir</h5>
		<p> """+value['data']['tempat_lahir'].title()+"""</p>"""

		status = value['message']
		value_data = value['data']

		dummy =json.dumps({'status':status,'data':value_data, 'html':html})
		load =json.loads(dummy)


	else:
		print('gagal')
		html = """<p style="text-align:center;">ANDA BELUM TERDAFTAR ATAU KOMBINASI NIK DAN NAMA SALAH.</p>"""

		status = value['message']
		value_data = value['data']

		dummy =json.dumps({'status':status,'data':value_data, 'html':html})
		load =json.loads(dummy)

	return json.dumps(load)

if __name__ == "__main__":
	app.run(debug=True)