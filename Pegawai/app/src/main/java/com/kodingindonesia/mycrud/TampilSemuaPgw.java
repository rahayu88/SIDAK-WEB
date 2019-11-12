package com.kodingindonesia.mycrud;

import android.app.ProgressDialog;
import android.content.Intent;
import android.os.AsyncTask;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListAdapter;
import android.widget.ListView;
import android.widget.SimpleAdapter;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;
import java.util.ArrayList;
import java.util.HashMap;


public class TampilSemuaPgw extends AppCompatActivity implements ListView.OnItemClickListener {

    private ListView listView;
    private String JSON_STRING;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tampil_semua_pgw);
        listView = (ListView) findViewById(R.id.listView);
        listView.setOnItemClickListener(this);
        getJSON();

    }


    private void showEmployee() {
        JSONObject jsonObject = null;
        ArrayList<HashMap<String, String>> list = new ArrayList<HashMap<String, String>>();
        try {
            jsonObject = new JSONObject(JSON_STRING);
            JSONArray result = jsonObject.getJSONArray(konfigurasi.TAG_JSON_ARRAY);

            for (int i = 0; i < result.length(); i++) {
                JSONObject jo = result.getJSONObject(i);
                String id = jo.getString(konfigurasi.TAG_ID);
                String name = jo.getString(konfigurasi.TAG_NAMA);
                String no_ktp = jo.getString(konfigurasi.TAG_KTP);
                String jk = jo.getString(konfigurasi.TAG_JK);
                String nope = jo.getString(konfigurasi.TAG_NOPE);
                String email = jo.getString(konfigurasi.TAG_EMAIL);
                String rek = jo.getString(konfigurasi.TAG_REK);
                String add = jo.getString(konfigurasi.TAG_ADD);


                HashMap<String, String> employees = new HashMap<>();
                employees.put(konfigurasi.TAG_ID, id);
                employees.put(konfigurasi.TAG_NAMA, name);
                employees.put(konfigurasi.TAG_KTP, no_ktp);
                employees.put(konfigurasi.TAG_JK, jk);
                employees.put(konfigurasi.TAG_NOPE, nope);
                employees.put(konfigurasi.TAG_EMAIL, email);
                employees.put(konfigurasi.TAG_REK, rek);
                employees.put(konfigurasi.TAG_ADD, add);

                list.add(employees);
            }

        } catch (JSONException e) {
            e.printStackTrace();
        }

        ListAdapter adapter = new SimpleAdapter(
                TampilSemuaPgw.this, list, R.layout.list_item,
                new String[]{konfigurasi.TAG_ID, konfigurasi.TAG_NAMA, konfigurasi.TAG_KTP, konfigurasi.TAG_JK, konfigurasi.TAG_NOPE, konfigurasi.TAG_EMAIL, konfigurasi.TAG_REK, konfigurasi.TAG_ADD },
                new int[]{R.id.id, R.id.name, R.id.no_ktp, R.id.edJk, R.id.edHP, R.id.edEmail, R.id.edRek, R.id.edAdd});
                listView.setAdapter(adapter);
    }

    private void getJSON() {
        class GetJSON extends AsyncTask<Void, Void, String> {

            ProgressDialog loading;

            @Override
            protected void onPreExecute() {
                super.onPreExecute();
                loading = ProgressDialog.show(TampilSemuaPgw.this, "Sedang Mengambil Data", "Mohon Tunggu...!!!", false, false);
            }

            @Override
            protected void onPostExecute(String s) {
                super.onPostExecute(s);
                loading.dismiss();
                JSON_STRING = s;
                showEmployee();
            }

            @Override
            protected String doInBackground(Void... params) {
                RequestHandler rh = new RequestHandler();
                String s = rh.sendGetRequest(konfigurasi.URL_GET_ALL);
                return s;
            }
        }
        GetJSON gj = new GetJSON();
        gj.execute();
    }

    @Override
    public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
        Intent intent = new Intent(this, TampilPegawai.class);
        HashMap<String, String> map = (HashMap) parent.getItemAtPosition(position);
        String empId = map.get(konfigurasi.TAG_ID).toString();
        intent.putExtra(konfigurasi.EMP_ID, empId);
        startActivity(intent);
    }

}


