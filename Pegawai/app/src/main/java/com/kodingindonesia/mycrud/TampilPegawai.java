package com.kodingindonesia.mycrud;

import android.app.ProgressDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.AsyncTask;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.HashMap;

/**
 * Created by muhammadyusuf on 01/19/2017.
 * kodingindonesia
 */

public class TampilPegawai extends AppCompatActivity implements View.OnClickListener{

    private EditText editTextId, editTextName, editTextKTP, editTextJK, editTextNope, editTextEMail, editTextRek, editTextAdd;

    private Button buttonUpdate;
    private Button buttonDelete;

    private String id;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tampil_pegawai);

        Intent intent = getIntent();

        id = intent.getStringExtra(konfigurasi.EMP_ID);

        editTextId = (EditText) findViewById(R.id.editTextId);
        editTextName = (EditText) findViewById(R.id.editTextName);
        editTextKTP = (EditText) findViewById(R.id.no_ktp);
        editTextJK = (EditText) findViewById(R.id.edJk);
        editTextNope = (EditText) findViewById(R.id.edHP);
        editTextEMail = (EditText) findViewById(R.id.edEmail);
        editTextRek = (EditText) findViewById(R.id.edRek);
        editTextAdd = (EditText) findViewById(R.id.edAdd);

        buttonUpdate = (Button) findViewById(R.id.buttonUpdate);
        buttonDelete = (Button) findViewById(R.id.buttonDelete);

        buttonUpdate.setOnClickListener(this);
        buttonDelete.setOnClickListener(this);

        editTextId.setText(id);

        getEmployee();
    }

    private void getEmployee(){
        class GetEmployee extends AsyncTask<Void,Void,String>{
            ProgressDialog loading;
            @Override
            protected void onPreExecute() {
                super.onPreExecute();
                loading = ProgressDialog.show(TampilPegawai.this,"Sedang Mengambil Data","Mohon Tunggu...!!!",false,false);
            }

            @Override
            protected void onPostExecute(String s) {
                super.onPostExecute(s);
                loading.dismiss();
                showEmployee(s);
            }

            @Override
            protected String doInBackground(Void... params) {
                RequestHandler rh = new RequestHandler();
                String s = rh.sendGetRequestParam(konfigurasi.URL_GET_EMP,id);
                return s;
            }
        }
        GetEmployee ge = new GetEmployee();
        ge.execute();
    }

    private void showEmployee(String json){
        try {
            JSONObject jsonObject = new JSONObject(json);
            JSONArray result = jsonObject.getJSONArray(konfigurasi.TAG_JSON_ARRAY);
            JSONObject c = result.getJSONObject(0);
            String name = c.getString(konfigurasi.TAG_NAMA);

            editTextName.setText(name);
            editTextKTP.setText(c.getString(konfigurasi.TAG_KTP));
            editTextJK.setText(c.getString(konfigurasi.TAG_JK));
            editTextNope.setText(c.getString(konfigurasi.TAG_NOPE));
            editTextEMail.setText(c.getString(konfigurasi.TAG_EMAIL));
            editTextRek.setText(c.getString(konfigurasi.TAG_REK));
            editTextAdd.setText(c.getString(konfigurasi.TAG_ADD));

        } catch (JSONException e) {
            e.printStackTrace();
        }
    }


    private void updateEmployee(){
        final String name = editTextName.getText().toString().trim();
        final String ktp = editTextKTP.getText().toString().trim();
        final String jk = editTextJK.getText().toString().trim();
        final String nope = editTextNope.getText().toString().trim();
        final String email = editTextEMail.getText().toString().trim();
        final String rek = editTextRek.getText().toString().trim();
        final String add = editTextAdd.getText().toString().trim();

        class UpdateEmployee extends AsyncTask<Void,Void,String>{
            ProgressDialog loading;
            @Override
            protected void onPreExecute() {
                super.onPreExecute();
                loading = ProgressDialog.show(TampilPegawai.this,"Updating Data Karyawan","Mohon Tunggu...!!!",false,false);
            }

            @Override
            protected void onPostExecute(String s) {
                super.onPostExecute(s);
                loading.dismiss();
                Toast.makeText(TampilPegawai.this,s,Toast.LENGTH_LONG).show();
            }

            @Override
            protected String doInBackground(Void... params) {
                HashMap<String,String> hashMap = new HashMap<>();
                hashMap.put(konfigurasi.TAG_ID, id);
                hashMap.put(konfigurasi.TAG_NAMA, name);
                hashMap.put(konfigurasi.TAG_KTP, ktp);
                hashMap.put(konfigurasi.TAG_JK, jk);
                hashMap.put(konfigurasi.TAG_NOPE, nope);
                hashMap.put(konfigurasi.TAG_EMAIL, email);
                hashMap.put(konfigurasi.TAG_REK, rek);
                hashMap.put(konfigurasi.TAG_ADD, add);

                RequestHandler rh = new RequestHandler();

                String s = rh.sendPostRequest(konfigurasi.URL_UPDATE_EMP,hashMap);

                return s;
            }
        }

        UpdateEmployee ue = new UpdateEmployee();
        ue.execute();
    }

    private void deleteEmployee(){
        class DeleteEmployee extends AsyncTask<Void,Void,String> {
            ProgressDialog loading;

            @Override
            protected void onPreExecute() {
                super.onPreExecute();
                loading = ProgressDialog.show(TampilPegawai.this, "Updating Data Karyawan", "Mohon Tunggu...!!!", false, false);
            }

            @Override
            protected void onPostExecute(String s) {
                super.onPostExecute(s);
                loading.dismiss();
                Toast.makeText(TampilPegawai.this, s, Toast.LENGTH_LONG).show();
            }

            @Override
            protected String doInBackground(Void... params) {
                RequestHandler rh = new RequestHandler();
                String s = rh.sendGetRequestParam(konfigurasi.URL_DELETE_EMP, id);
                return s;
            }
        }

        DeleteEmployee de = new DeleteEmployee();
        de.execute();
    }

    private void confirmDeleteEmployee(){
        AlertDialog.Builder alertDialogBuilder = new AlertDialog.Builder(this);
        alertDialogBuilder.setMessage("Apakah anda Yakin Menghapus karyawan ini?");

        alertDialogBuilder.setPositiveButton("Ya",
                new DialogInterface.OnClickListener() {
                    @Override
                    public void onClick(DialogInterface arg0, int arg1) {
                        deleteEmployee();
                        startActivity(new Intent(TampilPegawai.this,TampilSemuaPgw.class));
                    }
                });

        alertDialogBuilder.setNegativeButton("Tidak",
                new DialogInterface.OnClickListener() {
                    @Override
                    public void onClick(DialogInterface arg0, int arg1) {

                    }
                });

        AlertDialog alertDialog = alertDialogBuilder.create();
        alertDialog.show();
    }

    @Override
    public void onClick(View v) {
        if(v == buttonUpdate){
            updateEmployee();
        }

        if(v == buttonDelete){
            confirmDeleteEmployee();
        }
    }
}
