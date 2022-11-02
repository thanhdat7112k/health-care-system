package com.example.chatbotspring.data.entities;

import lombok.Getter;
import lombok.Setter;

import javax.persistence.Entity;
import javax.persistence.Table;
import java.util.Date;

@Entity
@Table(name = "medical_histories")
@Getter
@Setter
public class MedicalHistory extends BaseEntity {
    private Date dateTime;
    private String symptoms;
    private String diseaseName;
    private String username;

    public Date getDateTime() {
        return dateTime;
    }

    public void setDateTime(Date ngayThang) {
        this.dateTime = ngayThang;
    }

    public String getSymptoms() {
        return symptoms;
    }

    public void setSymptoms(String hienTuong) {
        this.symptoms = hienTuong;
    }

    public String getDiseaseName() {
        return diseaseName;
    }

    public void setDiseaseName(String vanDe) {
        this.diseaseName = vanDe;
    }

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }
}