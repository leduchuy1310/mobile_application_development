package com.train.leona.exercise2;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.Editable;
import android.text.TextUtils;
import android.text.TextWatcher;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

import java.text.DecimalFormat;

public class MainActivity extends AppCompatActivity {

    private Button btnClear;
    private EditText edtVnd;
    private EditText edtUsd;
    private EditText edtEur;

    public static final double USD_TO_EUR = 0.83;
    public static final double USD_TO_VND = 22.7755;

    DecimalFormat decimalFormat = new DecimalFormat("###,###,###,###.###");

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        addViews();
        addEvents();
    }

    private void addEvents() {

        btnClear.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                edtEur.setText("");
                edtUsd.setText("");
                edtVnd.setText("");

                edtVnd.setHint("Enter VND amount");
                edtUsd.setHint("Enter USD amount");
                edtEur.setHint("Enter EUR amount");
            }
        });
        // Convert USD to VND, EUR
        edtUsd.addTextChangedListener(new TextWatcher() {
            @Override
            public void beforeTextChanged(CharSequence charSequence, int i, int i1, int i2) {

            }

            @Override
            public void onTextChanged(CharSequence charSequence, int i, int i1, int i2) {
                if (!TextUtils.isEmpty(edtUsd.getText().toString())){
                    double usd = Double.parseDouble(edtUsd.getText().toString());

                    double vnd = usd*USD_TO_VND;
                    double eur = usd*USD_TO_EUR;

                    edtVnd.setText("");
                    edtEur.setText("");
                    edtVnd.setHint(decimalFormat.format(vnd));
                    edtEur.setHint(decimalFormat.format(eur));

                }
            }

            @Override
            public void afterTextChanged(Editable editable) {

            }
        });

        // Convert VND to USD, EUR
        edtVnd.addTextChangedListener(new TextWatcher() {

           @Override
           public void beforeTextChanged(CharSequence charSequence, int i, int i1, int i2) {

           }

           @Override
           public void onTextChanged(CharSequence charSequence, int i, int i1, int i2) {
               if (!TextUtils.isEmpty(edtVnd.getText().toString())){
                   double vnd = Double.parseDouble(edtVnd.getText().toString());
                   if (vnd != 0){

                       double usd = vnd/USD_TO_VND;
                       double eur = usd*USD_TO_EUR;
                       edtUsd.setText("");
                       edtEur.setText("");

                       edtUsd.setHint(decimalFormat.format(usd));
                       edtEur.setHint(decimalFormat.format(eur));
                   }
               }
           }

           @Override
           public void afterTextChanged(Editable editable) {

           }
       });


        //COnvert EUR to VND, USD
        edtEur.addTextChangedListener(new TextWatcher() {
            @Override
            public void beforeTextChanged(CharSequence charSequence, int i, int i1, int i2) {

            }

            @Override
            public void onTextChanged(CharSequence charSequence, int i, int i1, int i2) {
                if (!TextUtils.isEmpty(edtEur.getText().toString())){
                    double eur = Double.parseDouble(edtEur.getText().toString());
                    if (eur != 0){

                        double usd = eur/USD_TO_EUR;
                        double vnd = usd*USD_TO_VND;


                        edtUsd.setText("");
                        edtVnd.setText("");

                        edtUsd.setHint(decimalFormat.format(usd));
                        edtVnd.setHint(decimalFormat.format(vnd));
                    }
                }

            }

            @Override
            public void afterTextChanged(Editable editable) {

            }
        });

    }

    private void addViews() {
        btnClear = findViewById(R.id.btn_clear);
        edtVnd = findViewById(R.id.edt_vnd);
        edtUsd = findViewById(R.id.edt_usd);
        edtEur = findViewById(R.id.edt_eur);
    }
}
