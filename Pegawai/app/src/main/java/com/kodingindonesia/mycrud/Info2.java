package com.kodingindonesia.mycrud;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageView;

public class Info2 extends AppCompatActivity {

    ImageView image, image2;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_info2);

        image = (ImageView) findViewById(R.id.arahkanan);
        image2 = (ImageView) findViewById(R.id.arahkiri);

        //untuk next ke tampilan berikutnya
        image.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(Info2.this, login.class);
                Info2.this.startActivity(intent);
                Info2.this.finish();
            }
        });

        //untuk prev ke tampilan sebelumnya
        image2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(Info2.this, Info.class);
                Info2.this.startActivity(intent);
                Info2.this.finish();
            }
        });
    }
}
