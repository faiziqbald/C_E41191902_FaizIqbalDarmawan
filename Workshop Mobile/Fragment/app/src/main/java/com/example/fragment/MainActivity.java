package com.example.fragment;

import androidx.appcompat.app.AppCompatActivity;

import android.app.Fragment;
import android.app.FragmentManager;
import android.app.FragmentTransaction;
import android.view.View;
import android.widget.Button;
import android.os.Bundle;

public class MainActivity extends AppCompatActivity {

    Button firstFragment, secondFragment;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //get the reference Button's
        firstFragment = (Button) findViewById(R.id.firstFragment);
        secondFragment = (Button) findViewById(R.id.secondFragment);

        //Perform setOnClickListener event on First Button
        firstFragment.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                // Load First Fragment
                loadFragment(new FirstFragment());
            }
        });

        // perform setOnClickListener event on Second Button
        secondFragment.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View V){
                //Load Second Fragment
                loadFragment(new SecondFragment());
            }
        });
    }

    private void loadFragment(Fragment fragment){
        //create a FragmaentManager
        FragmentManager fm = getFragmentManager();
        //create a FragmentTransaction to begin the transaction and replace the Fragment
        FragmentTransaction fragmentTransaction = fm.beginTransaction();
        //Replace Frame layout with new Fragment
        fragmentTransaction.replace(R.id.frameLayout, fragment);
        fragmentTransaction.commit(); //save the changes
    }
}