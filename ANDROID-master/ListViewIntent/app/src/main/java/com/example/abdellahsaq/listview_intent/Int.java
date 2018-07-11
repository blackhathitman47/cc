package com.example.abdellahsaq.listview_intent;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class Int {
    private String title;
    private String logo;
    private String info;

    public Int(String title, String info) {
        this.title = title;
        this.info = info;
    }

    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public String getLogo() {
        String email = "\\b[\\w.%-]+@[-.\\w]+\\.[A-Za-z]{2,4}\\b";
        String phone = "\\d{10}|(?:\\d{3}-){2}\\d{4}|\\(\\d{3}\\)\\d{3}-?\\d{4}";


        Pattern patternEmail = Pattern.compile(email);
        Pattern patternPhone = Pattern.compile(phone);

        Matcher matcherEmail = patternEmail.matcher(this.info);
        Matcher matcherPhone = patternPhone.matcher(this.info);

        if (matcherEmail.find()) {
            this.logo = "gmail";
        } else if (matcherPhone.find()) {
            this.logo = "phone";
        } else {
            this.logo = "placeholder";
        }

        return logo;
    }

    public void setLogo(String logo) {
        this.logo = logo;
    }

    public String getInfo() {
        return info;
    }

    public void setInfo(String info) {
        this.info = info;
    }
}
