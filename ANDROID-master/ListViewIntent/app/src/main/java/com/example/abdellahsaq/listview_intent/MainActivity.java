package com.example.abdellahsaq.listview_intent;

import android.content.Intent;
import android.net.Uri;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.AdapterView;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;

import org.w3c.dom.Text;

import java.util.ArrayList;
import java.util.List;

public class MainActivity extends AppCompatActivity {

    private EditText mInputTitle;
    private EditText mInputMeta;
    private Button mButtonAdd;
    private ListView myList;
    private myCustomAdapter myAdapter;
    private List<Int> data;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        mInputTitle = findViewById(R.id.nameInput);
        mInputMeta = findViewById(R.id.infoInput);

        myList = findViewById(R.id.myList);

        mButtonAdd = findViewById(R.id.buttonAdd);

        data = new ArrayList<>();

        // Add data for data
        mButtonAdd.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Int one = new Int(mInputTitle.getText().toString(), mInputMeta.getText().toString());
                data.add(one);
                myAdapter = new myCustomAdapter(getApplicationContext(), data);
                myList.setAdapter(myAdapter);

                Log.d("Hello", one.getLogo());
            }
        });

        myList.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                Log.d("Hello", " " + data.size());
                // When Clicked
                // 1. Fetch the clicked item position and the data associated with it
                // 2. Instantiate Intent depending on the "logo" value
                // 3. Send extra with intent

                Toast.makeText(getApplicationContext(), data.get(position).getInfo(), Toast.LENGTH_LONG).show();


                if (data.get(position).getLogo() == "gmail") {
                    // Instantiating an intent
                    Intent mailClient = new Intent(Intent.ACTION_SENDTO);
                    mailClient.setData(Uri.parse("mailto:")); // Only email apps should handle this
                    // Putting extra info to send
                    mailClient.putExtra(Intent.EXTRA_EMAIL, new String[] { data.get(position).getInfo()});
                    // If no Activity found to handle our intent don't execute the intent
                    if (mailClient.resolveActivity(getPackageManager()) != null) {
                        startActivity(Intent.createChooser(mailClient, "Send mail ..."));
                    }

                } else if (data.get(position).getLogo() == "phone") {
                    Intent intent = new Intent(Intent.ACTION_DIAL);
                    intent.setData(Uri.parse("tel:" + data.get(position).getInfo()));

                    if (intent.resolveActivity(getPackageManager()) != null) {
                        startActivity(intent);
                    }
                } else {

                }


            }
        });
    }
}
