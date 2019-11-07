package com.kodingindonesia.mycrud;

import android.app.ProgressDialog;
import android.content.Intent;
import android.os.AsyncTask;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;
import java.util.HashMap;

/**
 * Created by muhammadyusuf on 01/19/2017.
 * kodingindonesia
 */

public class MainActivity extends AppCompatActivity implements View.OnClickListener{
    private EditText editTextName, editTextKTP, editTextJK, editTextNope, editTextEMail, editTextRek, editTextAdd;

    private Button buttonAdd;
    private Button buttonView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //Inisialisasi dari View
        editTextName = (EditText) findViewById(R.id.editTextName);
        editTextKTP = (EditText) findViewById(R.id.no_ktp);
        editTextJK = (EditText) findViewById(R.id.edJk);
        editTextNope = (EditText) findViewById(R.id.edHP);
        editTextEMail = (EditText) findViewById(R.id.edEmail);
        editTextRek = (EditText) findViewById(R.id.edRek);
        editTextAdd = (EditText) findViewById(R.id.edAdd);

        buttonAdd = (Button) findViewById(R.id.buttonAdd);
        buttonView = (Button) findViewById(R.id.buttonView);

        //Setting listeners to button
        buttonAdd.setOnClickListener(this);
        buttonView.setOnClickListener(this);
    }


    //Dibawah ini merupakan perintah untuk Menambahkan Pegawai (CREATE)
    private void addEmployee(){

        final String name = editTextName.getText().toString().trim();
        final String ktp = editTextKTP.getText().toString().trim();
        final String jk = editTextJK.getText().toString().trim();
        final String nope = editTextNope.getText().toString().trim();
        final String email = editTextEMail.getText().toString().trim();
        final String rek = editTextRek.getText().toString().trim();
        final String add = editTextAdd.getText().toString().trim();

        class AddEmployee extends AsyncTask<Void,Void,String>{

            ProgressDialog loading;

            @Override
            protected void onPreExecute() {
                super.onPreExecute();
                loading = ProgressDialog.show(MainActivity.this,"Menambahkan Data Karyawan","Mohon Tunggu...!!!",false,false);
            }

            @Override
            protected void onPostExecute(String s) {
                super.onPostExecute(s);
                loading.dismiss();
                Toast.makeText(MainActivity.this,s,Toast.LENGTH_LONG).show();
            }

            @Override
            protected String doInBackground(Void... v) {
                HashMap<String,String> params = new HashMap<>();
                params.put(konfigurasi.TAG_NAMA, name);
                params.put(konfigurasi.TAG_KTP, ktp);
                params.put(konfigurasi.TAG_JK, jk);
                params.put(konfigurasi.TAG_NOPE, nope);
                params.put(konfigurasi.TAG_EMAIL, email);
                params.put(konfigurasi.TAG_REK, rek);
                params.put(konfigurasi.TAG_ADD, add);

                RequestHandler rh = new RequestHandler();
                String res = rh.sendPostRequest(konfigurasi.URL_ADD, params);
                return res;
            }
        }

        AddEmployee ae = new AddEmployee();
        ae.execute();
    }

    @Override
    public void onClick(View v) {
        if(v == buttonAdd){
            addEmployee();
        }

        if(v == buttonView){
            startActivity(new Intent(this,TampilSemuaPgw.class));
        }
    }
}
