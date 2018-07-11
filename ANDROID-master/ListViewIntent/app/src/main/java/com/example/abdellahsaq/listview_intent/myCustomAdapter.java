package com.example.abdellahsaq.listview_intent;

import android.content.Context;
import android.util.Log;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.ImageView;
import android.widget.TextView;

import org.w3c.dom.Text;

import java.util.HashMap;
import java.util.List;

public class myCustomAdapter extends BaseAdapter {

    private Context mContext;
    private List<Int> data;

    public myCustomAdapter(Context context, List<Int> data) {
        mContext = context;
        this.data = data;
    }

    @Override
    public int getCount() {
        return data.size();
    }

    @Override
    public Object getItem(int position) {
        return data.get(position);
    }

    @Override
    public long getItemId(int position) {
        return position;
    }

    @Override
    public View getView(int position, View convertView, ViewGroup parent) {
        View v = View.inflate(mContext, R.layout.custom_row, null);

        TextView mTitle = v.findViewById(R.id.title);
        TextView mMeta = v.findViewById(R.id.info);
        ImageView mLogo = v.findViewById(R.id.logo);

        mTitle.setText(data.get(position).getTitle());
        mMeta.setText(data.get(position).getInfo());
        int resID = mContext.getResources().getIdentifier(data.get(position).getLogo(), "drawable", mContext.getPackageName());
        mLogo.setImageResource(resID);


        return v;
    }
}
